MyTimeUnit = function () {};

MyTimeUnit.getDateTime = function (d) {
    var date = new Date(d);
    var _date = MyTimeUnit.getDate(date);
    var _time = MyTimeUnit.getTime(date);
    return _date + ' ' + _time;
};

MyTimeUnit.getDate = function (d) {
    var date = new Date(d);
    var day = date.getDate();
    day = day < 10 ? '0' + day : day;
    var month = date.getMonth() + 1;
    month = month < 10 ? '0' + month : month;
    return month + '/' + day + '/' + date.getFullYear();
};

MyTimeUnit.getTime = function (d) {
    var date = new Date(d);
    var hour = date.getHours();
    hour = hour < 10 ? '0' + hour : hour;
    var minutes = date.getMinutes();
    minutes = minutes < 10 ? '0' + minutes : minutes;
    return hour + ':' + minutes;
};