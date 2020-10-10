javascript:
(function () {
    const token = '%TOKEN%';
    const list = '%LIST%';
    const labels = '%LABELS%';
    const scheduleToday = '%SCHEDULETODAY%';
    const baseUrl = 'https://marvin-165117.appspot.com/api/addTask';

    window.history.replaceState(null, null, ' ');

    const parsedList = list.trim() ? ' ' + decodeURIComponent('%23') + list.replace(' ', '') : '';
    const parsedLabels = labels.trim() ? ' ' + labels.split(',').map(function(label) { return '@' + label.trim().replace(' ', '') }).join(' ') : '';
    const parsedSchedule = scheduleToday ? ' +today' : '';

    let postData = {
        title: document.title.replace(/[+]/g, '') + ' - ' + window.location.href  + parsedList + parsedLabels + parsedSchedule
    };

    const response = fetch(baseUrl, {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        headers: {
            'X-Zapier-Token': token.trim(),
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(postData),
    }).then(function(data) {
        if (data.status >= 400 && data.status < 600) {
            alert('Marvin is either down, or there is an issue with your Marvin token - please verify it by recreating the bookmarklet.');
        }
        else {
            window.location.reload();
        }
        
        console.log(data)
    }).catch(function(error) {
        console.error(error);
        alert('Something went wrong when saving the page. Some pages disallow bookmarklets. If this error persists across many pages, try getting a new bookmarklet. The error was: ' + error);
    });
})();