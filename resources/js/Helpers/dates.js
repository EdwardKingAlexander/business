export function createdAt(dateString) {
    // Parse the ISO string
    const date = new Date(dateString);

    // Check if the date is valid
    if (isNaN(date.getTime())) {
        return 'Invalid Date';
    }

    // Define arrays for days and months
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    // Get day, month, and other components
    const dayOfWeek = days[date.getDay()];
    const month = months[date.getMonth()];
    const day = date.getDate();
    const year = date.getFullYear();
    const hour = date.getHours();
    const minute = String(date.getMinutes()).padStart(2, '0');

    // Determine the suffix for the day
    const daySuffix = ((day) => {
        if (day > 3 && day < 21) return 'th';
        switch (day % 10) {
            case 1:  return "st";
            case 2:  return "nd";
            case 3:  return "rd";
            default: return "th";
        }
    })(day);

    // Format for AM/PM
    const hourFormatted = hour % 12 || 12;
    const amPm = hour < 12 ? 'am' : 'pm';

    // Return formatted string
    return `${dayOfWeek} ${month} ${day}${daySuffix}, ${year} at ${hourFormatted}:${minute}${amPm}`;
}