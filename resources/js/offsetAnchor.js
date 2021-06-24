function offsetAnchor() {
    if (location.hash.length !== 0) {
        window.scrollTo(window.scrollX, window.scrollY - 100);
    }

}

// This will capture hash changes while on the page
window.addEventListener("hashchange", offsetAnchor);