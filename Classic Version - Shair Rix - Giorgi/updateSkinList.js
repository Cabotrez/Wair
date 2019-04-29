var ran = Math.random() + 10;
const fs = require("fs"),
      folderContents = fs.readdirSync("./skins"),
      pngFileNames = folderContents.filter(f => f.endsWith(".png"));

if(folderContents.length !== pngFileNames.length) {
  const nonPngFileNames = folderContents.filter(f => !f.endsWith(".png"));
  console.warn("Warning: found " + nonPngFileNames.length + " non-PNG skins, these will not be loaded! (" + nonPngFileNames.join(", ") + ")");
}

fs.writeFileSync("./skinList.txt?v=" + ran, pngFileNames.map(f => f.slice(0, -4)).join());
console.log("Successfully updated skinList.txt!");
