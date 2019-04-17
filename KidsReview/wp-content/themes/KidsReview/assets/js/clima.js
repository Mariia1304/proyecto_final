let cors = 'https://cors-anywhere.herokuapp.com/';
const url = 'https://api.darksky.net/forecast/'
const api_key = '8a101ecf8accd17acb1e9d764029942f';
let datos = '';
let coords = {
    scl: '-33.4377968,-70.6504451'
}
let queryParams = ['exclude=[minutely,hourly,alerts,flags]', 'lang=es', 'units=auto'];
let timeStamp;
let convDataTime;
//function convert timetamp to date:
function convert() {
    // Months array
    let months_arr = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    // Convert timestamp to milliseconds
    let date = new Date(timeStamp * 1000);
    // Year
    let year = date.getFullYear();
    // Month
    let month = months_arr[date.getMonth()];
    // Day
    let day = date.getDate();
    // Hours
    //let hours = date.getHours();
    // Minutes
    //let minutes = "0" + date.getMinutes();
    // Seconds
    //let seconds = "0" + date.getSeconds();
    // Display date time in MM-dd-yyyyvformat
    convDataTime = month + '-' + day + '-' + year;
}
$(document).ready(function() {
    $.ajax({
        url: cors + url + api_key + '/' + coords['scl'] + '?' + queryParams[0] + '&' + queryParams[1] + '&' + queryParams[2],
        method: 'GET'
    }).then(function(data) {
        $('#clima').text(parseInt(data.currently.temperature) + 'º ' + data.currently.summary);
        //console.log(data.daily.data[0]['time']);
        for (let i = 0; i < data.daily.data.length; i++) {
            timeStamp = data.daily.data[i]['time'];
            convert();
            let temperature = parseInt(data.daily.data[i]['temperatureHigh']) + 'º ';
            console.log(temperature);
            datos = datos + '<tr><td>' + convDataTime + '</td><td>' + temperature + '</td></tr>';
            $('#print').html(datos);
            //$('#daily_0').text(parseInt(data.daily.data[0]['temperatureHigh']) + 'º ');
        }
        // $('#clima_daily').on('click', function() {
        //     $('#print').toggleClass('display');
        // });
    });
});