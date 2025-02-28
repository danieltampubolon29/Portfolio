function updateClock() {
    const now = new Date();
    let [hours, minutes, seconds] = [now.getHours(), now.getMinutes(), now.getSeconds()];
    const amPm = hours >= 12 ? 'PM' : 'AM';
    hours = (hours % 12 || 12).toString().padStart(2, '0');
    minutes = minutes.toString().padStart(2, '0');
    seconds = seconds.toString().padStart(2, '0');
    document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds} ${amPm}`;
}
setInterval(updateClock, 1000);
updateClock();