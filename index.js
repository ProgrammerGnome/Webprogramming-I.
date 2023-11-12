function toggleAccordion(fileNumber) {
    const fileContent = document.querySelector(`.file-item:nth-child(${fileNumber}) .file-content`);
    fileContent.style.display = (fileContent.style.display === 'block') ? 'none' : 'block';
}
