// Function to show the next section and hide the current section
function nextSection(nextIndex) {
    const currentSection = document.getElementById(`section${nextIndex - 1}`);
    const nextSection = document.getElementById(`section${nextIndex}`);

    if (currentSection && nextSection) {
        currentSection.classList.remove("current");
        nextSection.classList.add("current");
    }
}

// Function to show the previous section and hide the current section
function previousSection(previousIndex) {
    const currentSection = document.getElementById(`section${previousIndex}`);
    const previousSection = document.getElementById(
        `section${previousIndex - 1}`
    );

    if (currentSection && previousSection) {
        currentSection.classList.remove("current");
        previousSection.classList.add("current");
    }
}
