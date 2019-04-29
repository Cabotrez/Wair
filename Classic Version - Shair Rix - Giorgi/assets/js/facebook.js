// This is called with the results from from FB.getLoginStatus().
statusChangeCallback = function(response) {
	console.log('statusChangeCallback');
	console.log(response);
	// for FB.getLoginStatus().
	if (response.status === 'connected') {
		// The response object is returned with a status field that lets the
		// app know the current login status of the person.
		// Full docs on the response object can be found in the documentation
		// for FB.getLoginStatus().
		testAPI();
		getJWT(response.authResponse.userID, response.authResponse.accessToken);
	} else if (response.status === 'not_authorized') {
		console.log('Not AUthorized1');
	} else {
		console.log('Not Authhorized 2')
	}
}
//Logout thingy
fbLogout = function() {
	FB.logout(function(response) {
		$('.fb-name').text('Guest');
		$('.coins-fb').text('100');
		$('.fb-level').text('Level: 1');
		$('#fb-log').attr('onclick', 'loginToFacebook()')
		$('#fb-log').text('login');
		$("#fb-log").addClass('gmb-blue');
		$("#fb-log").removeClass('gmb-red');
		$(".gmb-buy").addClass('logged-out')
	});
}
// This function is called when someone finishes with the Login
// Button.  See the onlogin handler attached to it in the sample
// code below.
function checkLoginState() {
	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});
}

getFreeCoins = function(){
	refreshInformation();
	var collecting = $.post("http://wair.io/pruebasffekfefe/api/coin/collect.php", {id: FB.getUserID()});
	process();
	setTimeout(function(){
		console.log(collecting)
		$("#process").attr('style', 'transform: scale(0)')
		if ( collecting.responseText == 'Suceeded' ){
			openSuccess('Nice! Come back in 2 hours!');
			window.lastFreeCoins = Date.now() + 7200000.000;
			localStorage.setItem('lastFreeCoins', lastFreeCoins)
		}
		if ( collecting.responseText == 'NOPE' ){
			var v = (Math.floor( ( (lastFreeCoins - Date.now() ) / 1000) / 60) % 60 ).toString();
			if ( v.toString().length == 1 ){
				var v = 0 + (Math.floor( ( (lastFreeCoins - Date.now() ) / 1000) / 60) % 60 ).toString();
			}
			var time = Math.floor( ( ( (lastFreeCoins - Date.now() ) / 1000) / 60) / 60 ).toString() + ':' + v;
			openError('Come back in ' + time + ' hours!');
		}
	},1000);
}

refreshInformation = function() {
	$.ajax({
		url: 'http://wair.io/pruebasffekfefe/api/simple/get.php?id=' + FB.getUserID(),
		type: 'GET',
		success: function(data) {
			console.log(JSON.parse(data))
			$('.fb-name').text(JSON.parse(data).name);
			$('.coins-fb').text(JSON.parse(data).coinAmount);
			$('.fb-level').text('Level: ' + Math.floor(Math.sqrt(JSON.parse(data).xp / 1000)));
			window.myItems = JSON.parse(data).items;
			for (var i in myItems) {
				var item = myItems[i];
				if (item.type === "mass_boost") {
					window.myMassBoost = item;
				}
			}
		}
	});
}

loginToFacebook = function() {
	console.log('logging in')
	if (null == FB) {
		alert("You seem to have something blocking Facebook on your browser, please check for any extensions");
	} else {
		FB.login(function(value) {
			refreshInformation();
			FB.getLoginStatus(function(response) {
			 console.log(response)
			 statusChangeCallback(response);
		    });
			$('#fb-log').attr('onclick', 'fbLogout()')
			$('#fb-log').text('logout');
			$("#fb-log").removeClass('gmb-blue');
			$("#fb-log").addClass('gmb-red');
			$(".gmb-buy").removeClass('logged-out');
		}, {
			scope: "public_profile, email"
		});
	}
}
window.fbAsyncInit = function() {
	FB.init({
		appId: '652400741637754',
		cookie: true, // enable cookies to allow the server to access
		// the session
		xfbml: true, // parse social plugins on this page
		version: 'v2.9' // use graph api version 2.5
	});
	// Now that we've initialized the JavaScript SDK, we call
	// FB.getLoginStatus().  This function gets the state of the
	// person visiting this page and can return one of three states to
	// the callback you provide.  They can be:
	//
	// 1. Logged into your app ('connected')
	// 2. Logged into Facebook, but not your app ('not_authorized')
	// 3. Not logged into Facebook and can't tell if they are logged into
	//    your app or not.
	//
	// These three cases are handled in the callback function.
	//loginToFacebook();
	FB.getLoginStatus(function(response) {
		console.log(response)
		statusChangeCallback(response);
	});
};
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s);
	js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
// Here we run a very simple test of the Graph API after login is
// successful.  See statusChangeCallback() for when this call is made.
function testAPI() {
	console.log('Welcome!  Fetching your information... ');
	FB.api('/me', function(response) {});
	FB.api("/me/picture?width=180&height=180", function(messageEvent) {
		console.log(messageEvent.data)
	});
}

getJWT = function(userid, accesstoken) {
	jwt = null; // flush out our jwt.
	var url = 'http://wair.io/pruebasffekfefe/api/login.php?v=21';
	var method = 'POST';
	var data = {
		userID: userid,
		accessToken: accesstoken,
	};
	var success = function(response) {
		if (!response.token) {
			console.log('webservice failed to provide JWT');
		} else {
			jwt = response.token;
			console.log('login successful, got jwt token: ' + jwt);
		}
	}
	var failure = function(error) {
		console.log('login failed with error:');
		var message = error.responseText
		console.log(message);
	}
	// run the api call specified and wait for its response
	apicall(url, method, data, success, failure)
}
// Update the players JWT by using their EXISTING jwt.
// dumb wrapper for api calls because im lazy and bad at javascript
apicall = function(url, method, data, goodcall, badcall) {
	// if we have a JWT set, send it with the request
	if (jwt != null) {
		url = url + '?token=' + jwt;
	}
	console.log('SENT:' + method + ' ' + url + ' DATA: ' + JSON.stringify(data));
	// call the ajax and wait for it to complete
	var ajaxCall = $.ajax({
		url: url,
		method: method,
		data: data,
		success: function(data) {
			window.JWT = data;
			// window.sendFBToken();
		},
		error: function(error, errorThrown) {
			//pagelog(2,'ERROR: ' + JSON.stringify(error) + 'error: ' + JSON.stringify(errorThrown));
			// invoke the failure callback function
			badcall(error);
		}
	});
}