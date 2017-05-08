MyTimeUnit = function () {};

MyTimeUnit.getDateTime = function (date) {
    var day = date.getDate();
    day = day < 10 ? '0' + day : day;
    var month = date.getMonth() + 1;
    month = month < 10 ? '0' + month : month;
    var hour = date.getHours();
    hour = hour < 10 ? '0' + hour : hour;
    var minutes = date.getMinutes();
    minutes = minutes < 10 ? '0' + minutes : minutes;
    return month + '/' + day + '/' + date.getFullYear() + ' ' + hour + ':' + minutes;
};

MyTimeUnit.getDate = function (date) {
    var day = date.getDate();
    day = day < 10 ? '0' + day : day;
    var month = date.getMonth() + 1;
    month = month < 10 ? '0' + month : month;
    return month + '/' + day + '/' + date.getFullYear();
};