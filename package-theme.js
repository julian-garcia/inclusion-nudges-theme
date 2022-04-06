const fs = require("fs");
const archiver = require("archiver");

const output = fs.createWriteStream(__dirname + "/inclusion-nudges.zip");
const archive = archiver("zip", {
  zlib: { level: 9 },
});

archive.pipe(output);
archive.glob("*.php");
archive.glob("*.png");
archive.glob("*.css");
archive.glob("*.json");
archive.directory("assets/dist");
archive.directory("template-parts");
archive.finalize();
