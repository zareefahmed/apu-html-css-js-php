document.getElementById('fileInput').addEventListener('change', previewImages);
document.getElementById('downloadZip').addEventListener('click', downloadAsZip);

function previewImages(event) {
    const files = event.target.files;
    const imagePreview = document.getElementById('imagePreview');
    imagePreview.innerHTML = ''; // Clear previous previews

    for (let file of files) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.width = 100; // Thumbnail size
            imagePreview.appendChild(img);
        }
        reader.readAsDataURL(file);
    }
}

function downloadAsZip() {
    const files = document.getElementById('fileInput').files;
    if (files.length === 0) {
        alert('Please select some images first.');
        return;
    }

    const zip = new JSZip();

    for (let file of files) {
        zip.file(file.name, file);
    }

    zip.generateAsync({type:"blob"}).then(function(content) {
        const a = document.createElement('a');
        a.href = URL.createObjectURL(content);
        a.download = "images.zip";
        a.click();
    });
}