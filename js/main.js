let scrollPercentage = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round(pos * 100 / calcHeight);

    scrollProgress.style.background = `conic-gradient( #719B39 ${scrollValue}%, #f0f0f0 ${scrollValue}%)`;
    progressValue.textContent = scrollValue + "%";
}
window.onscroll = scrollPercentage;