document.getElementById('fileInput').addEventListener('change', readFile);
document.getElementById('saveEdits').addEventListener('click', saveEdits);

function readFile(event) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        document.getElementById('fileContent').value = e.target.result;
    }
    reader.readAsText(file);
}

function saveEdits() {
    const content = document.getElementById('fileContent').value;
    const blob = new Blob([content], { type: 'text/plain' });
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'edited_file.txt';
    a.click();
}