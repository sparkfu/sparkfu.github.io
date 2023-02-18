function saveName() {
  var name = document.getElementById("name").value;
  var file = new File([name], "names.txt", {type: "text/plain;charset=utf-8"});
  saveAs(file);
}

// Warten, bis das DOM vollständig geladen ist
document.addEventListener('DOMContentLoaded', function() {
    // Den Button auswählen und einen Event-Listener hinzufügen
    document.getElementById('save-btn').addEventListener('click', function() {
      // Die Funktion saveName() aufrufen
      saveName();
    });
  });