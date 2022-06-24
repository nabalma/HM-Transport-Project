//  Representation 1, transportés

const ct1 = document.getElementById('representation1').getContext('2d');
const chart1 = new Chart(ct1, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet ', 'Aout', 'Sept', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: 'transportés (millions de litres)',
            data: [12, 19, 13, 25, 22, 13, 28, 30, 75, 66, 48, 55],
            backgroundColor: [

                '#80024D',

            ],
            borderColor: [
                '#80024D',

            ],
            borderWidth: 1
        }]
    },
    options: {

    }
});

//  Representation 2, livrés

const ct2 = document.getElementById('representation2').getContext('2d');
const chart2 = new Chart(ct2, {
    type: 'line',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet ', 'Aout', 'Sept', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: 'livrés (millions de litres)',
            data: [12, 19, 13, 25, 22, 13, 28, 30, 75, 66, 48, 55],
            backgroundColor: [

                '#090C4E',

            ],
            borderColor: [
                '#090C4E',

            ],
            borderWidth: 1,
        }]
    },
    options: {

    }
});


//  Representation 3, Coulages

const ct3 = document.getElementById('representation3').getContext('2d');
const chart3 = new Chart(ct3, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet ', 'Aout', 'Sept', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
            label: '(litres)',
            data: [12, 19, 13, 25, 22, 13, 28, 30, 75, 66, 48, 55],
            backgroundColor: [

                '#CA0422',

            ],
            borderColor: [
                '#CA0422',

            ],
            borderWidth: 1
        }]
    },
    options: {

    }
});



//  Representation 4, Contributions aux volumes

const ct4 = document.getElementById('representation4').getContext('2d');
const chart4 = new Chart(ct4, {
    type: 'bar',
    data: {
        labels: ['Vivo Energy', 'Sonabhy', 'Total', 'Oryx'],
        datasets: [{
            label: 'Pourcentages (litres transportés)',
            data: [50, 20, 10, 10],
            backgroundColor: [

                '#644516 ',

            ],
            borderColor: [
                '#644516 ',

            ],
            borderWidth: 1
        }]
    },
    options: {
        indexAxis: 'y',
    }
});






//  Representation 5, Camions disponibles

const ct5 = document.getElementById('representation5').getContext('2d');
const chart5 = new Chart(ct5, {

    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet ', 'Aout', 'Sept', 'Octobre', 'Novembre', 'Décembre'],
        datasets: [{
                type: 'bar',
                label: 'Nbre de camions disponibles',
                data: [19, 20, 19, 20, 19, 20, 18, 20, 18, 20, 20, 19],
                backgroundColor: [

                    '#85C1E9',

                ],
                borderColor: [
                    '#85C1E9',

                ],
                borderWidth: 1
            },
            {
                type: 'line',
                label: 'Capacité flotte',
                data: [20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20],
                backgroundColor: [

                    '#8A071B',

                ],
                borderColor: [
                    '#8A071B',

                ],
                borderWidth: 1
            }






        ]
    },
    options: {

    }
});



//  Representation 6, HSSE