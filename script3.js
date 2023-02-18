function saveName() {
    var name = document.getElementById("name").value;
    var file = new File([name], "names.txt", {type: "text/plain;charset=utf-8"});
    saveAs(file);
  }
  