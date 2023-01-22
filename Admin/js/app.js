
$(document).ready(function () {
    showSearch();
    showYear();
    showGender();
    showLesson();
    showQuiz();
    showTime();
    showDate();
    showScore();


});
function showSearch() {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
}

function showYear() {
    $.post('./dataYear.php', function (dataYear) {

        let titleT = dataYear[0].year;
        let M1 = dataYear[0].Jan;
        let M2 = dataYear[0].Feb;
        let M3 = dataYear[0].Mar;
        let M4 = dataYear[0].Apr;
        let M5 = dataYear[0].May;
        let M6 = dataYear[0].Jun;
        let M7 = dataYear[0].Jul;
        let M8 = dataYear[0].Aug;
        let M9 = dataYear[0].Sep;
        let M10 = dataYear[0].Oct;
        let M11 = dataYear[0].Nov;
        let M12 = dataYear[0].Aug;


        let chartdata4 = {
            datasets: [{
                backgroundColor: [
                    '#ff6384',
                    '#36a2eb',
                    '#cc65fe',
                    '#ffce56',
                    '#794c74',
                    '#c56183',
                    '#0f3057',
                    '#00587a',
                    '#835858',
                    '#0278ae',
                    '#32e0c4',
                    '#f56a79'
                ],
                data: [
                    M1,
                    M2,
                    M3,
                    M4,
                    M5,
                    M6,
                    M7,
                    M8,
                    M9,
                    M10,
                    M11,
                    M12
                ],
                label: titleT
            }],
            labels: [
                'มกราคม',
                'กุมภาพันธ์',
                'มีนาคม',
                'เมษายน',
                'พฤษภาคม',
                'มิถุนายน',
                'กรกฎาคม',
                'สิงหาคม',
                'กันยายน',
                'ตุลาคม',
                'พฤศจิกายน',
                'ธันวาคม'
            ]
        }

        let ctx = $('#myyear');
        let myBarChart = new Chart(ctx, {
            type: 'bar',
            data: chartdata4,
        });
    })
}


function showGender() {
    $.post('./dataGender.php', function (female, male) {
      
        let f = female;

        let chartdata = {
            datasets: [{
                backgroundColor: [
                    '#ff6384',
                    '#36a2eb'
                ],

                borderColor: [
                    '#ffffff',
                    '#ffffff'

                ],
                hoverBorderColor: [
                    '#cccccc',
                    '#cccccc'
                ],
                data: [
                    f[0],
                    f[1]
                ]

            }],
            labels: [
                'หญิง',
                'ชาย'
            ]
        };


        let ctx = $('#mygender');
        let myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: chartdata,
        });
    })
}
function showLesson() {
    $.post('./dataLes.php', function ([dataLesm,dataLesf]) {

        let nameLesson = [];
        let sumLessonm = [];
        let sumLessonf = [];
       

        for (let i in dataLesm) {
            sumLessonm.push(dataLesm[i].sumLessonm);
        }
       for (let j in dataLesf) {
            nameLesson.push(dataLesf[j].nameLesson);
            sumLessonf.push(dataLesf[j].sumLessonf);
       }
        

        let chartdata2 = {
            datasets: [{
                backgroundColor: [
                    '#ff6384',
                    '#ff6384',
                    '#ff6384',
                ],
                data: sumLessonf,
                label: 'หญิง',
                type: 'bar',
                order: 1,
                
            },{
                backgroundColor: [
                    '#36a2eb',
                    '#36a2eb',
                    '#36a2eb',
                ],
                data: sumLessonm,
                label: 'ชาย',
                type: 'bar',
                order: 2
            }],
            labels: nameLesson

        };

        let ctx = $('#mylesson');
        let mixedChart = new Chart(ctx, {
            data: chartdata2,
            type: 'bar',

        });
    })

}
function showQuiz() {
    $.post('./dataQuiz.php', function ([dataQuizm,dataQuizf]) {

        let nameQuizm = [];
        let sumQuizm = [];
        let sumQuizf = [];

        for (let i in dataQuizm) {
            nameQuizm.push(dataQuizm[i].Name_lesson);
            sumQuizm.push(dataQuizm[i].sumQuizm);
        }
        for (let j in dataQuizf) {
            sumQuizf.push(dataQuizf[j].sumQuizf);
        }

        let chartdata3 = {
            datasets: [{
                backgroundColor: [
                    '#ff6384',
                    '#ff6384',
                    '#ff6384',
                ],
                data: sumQuizf,
                label: 'หญิง',
                type: 'bar',
                order: 1,

            },{
                backgroundColor: [
                    '#36a2eb',
                    '#36a2eb',
                    '#36a2eb',
                ],
                data: sumQuizm,
                label: 'ชาย',
                type: 'bar',
                order: 2

            }],
            labels: nameQuizm

        };

        let ctx = $('#myquiz');
        let mixedChart = new Chart(ctx, {
            data: chartdata3,
            type: 'bar',

        });
    })

}
function showTime(){
    $.post('./dataTime.php', function ([datamf,dataff]) {
        
        let datam = [];
        let dataf = [];

        for (let i in datamf) {
            datam.push(datamf[i].timer);
        }
        for (let j in dataff) {
            dataf.push(dataff[j].timer);
        }
        // console.log(dataf);

    let chartdata5 = {
        datasets: [{
            backgroundColor: [
                '#ff6384',
                '#ff6384',
                '#ff6384',
                '#ff6384',
            ],
            data: dataf,
                label: 'หญิง',
                type: 'bar',
                order: 1,
        },{
            backgroundColor: [
                '#36a2eb',
                '#36a2eb',
                '#36a2eb',
                '#36a2eb',
            ],
            data: datam,
            label: 'ชาย',
            type: 'bar',
            order: 2
        }],
        labels: [
            "00:00:00-06:00:00",
            "06:00:00-12:00:00",
            "12:00:00-18:00:00",
            "18:00:00-00:00:00"
        ]
    };

    let ctx = $('#mytime');
        let mixedChart = new Chart(ctx, {
            data: chartdata5,
            type: 'bar',

        });
    })
}

function showDate(){
    $.post('./dataDate.php', function ([dataA,dataB]) {
        
            let datam = [];
            let dataf = [];

            for(let i in dataA){
                datam.push(dataA[i].Mon);
                datam.push(dataA[i].Tue);
                datam.push(dataA[i].Wed);
                datam.push(dataA[i].Thu);
                datam.push(dataA[i].Fri);
                datam.push(dataA[i].Sat);
                datam.push(dataA[i].Sun);
            }
            for(let j in dataB){
                dataf.push(dataB[j].Mon);
                dataf.push(dataB[j].Tue);
                dataf.push(dataB[j].Wed);
                dataf.push(dataB[j].Thu);
                dataf.push(dataB[j].Fri);
                dataf.push(dataB[j].Sat);
                dataf.push(dataB[j].Sun);
            }

        let chartdata6 = {
            datasets: [{
                backgroundColor: [
                    '#ff6384',
                    '#ff6384',
                    '#ff6384',
                    '#ff6384',
                    '#ff6384',
                    '#ff6384',
                    '#ff6384',

                ],
                data: dataf,
                    label: 'หญิง',
                    type: 'bar',
                    order: 1,
            },{
                backgroundColor: [
                    '#36a2eb',
                    '#36a2eb',
                    '#36a2eb',
                    '#36a2eb',
                    '#36a2eb',
                    '#36a2eb',
                    '#36a2eb',
                ],
                data: datam,
                label: 'ชาย',
                type: 'bar',
                order: 2
            }],
            labels: [
                "จันทร์",
                "อังคาร",
                "พุธ",
                "พฤหัสบดี",
                "ศุกร์",
                "เสาร์",
                "อาทิตย์"
            ]

        };
        let ctx = $('#mydate');
        let mixedChart = new Chart(ctx, {
            data: chartdata6,
            type: 'bar',

        });

    })
}
function showScore(){
    $.post('./dataScore.php', function ([datatotala,datatotalb,datatitle]) {
        
        let totaltitle = [];
        let totalm = [];
        let totalf = [];

        for(let i in datatotala){
            totalm.push(datatotala[i].totalScore);
        }
        for(let j in datatotalb){
            totalf.push(datatotalb[j].totalScore);
        }
        for(let s in datatitle){
            totaltitle.push(datatitle[s].Name_lesson);
        }


        let chartdata7 = {
           datasets:[{
            backgroundColor: [
                '#ff6384',
                '#ff6384',
                '#ff6384',
                '#ff6384',
                '#ff6384',
                '#ff6384',
                '#ff6384',

            ],
            data: totalf,
                    label: 'หญิง',
                    type: 'bar',
                    order: 1,
           },{
            backgroundColor: [
                '#36a2eb',
                '#36a2eb',
                '#36a2eb',
                '#36a2eb',
                '#36a2eb',
                '#36a2eb',
                '#36a2eb',
            ],
            data: totalm,
                label: 'ชาย',
                type: 'bar',
                order: 2,

           }],
           labels: totaltitle,
        }
        let ctx = $('#myscore');
        let mixedChart = new Chart(ctx, {
            data: chartdata7,
            type: 'bar',

        });
    })
}