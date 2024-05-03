document.addEventListener('DOMContentLoaded', function () {
    // Filtra las tarjetas por la categoría 'Formaciones' al cargar la página
    filtrarTarjetas('formaciones');

    // Selecciona todos los botones con la clase '.btn-academic'
    var botones = document.querySelectorAll('.btn-academic');

    // Itera sobre cada botón y agrega un listener de eventos
    botones.forEach(function (boton) {
        boton.addEventListener('click', function () {
            // Remueve la clase 'active' de todos los botones
            botones.forEach(function (boton) {
                boton.classList.remove('active');
            });
            // Agrega la clase 'active' solo al botón actual
            this.classList.add('active');

            var categoria = this.getAttribute('data-filter');
            filtrarTarjetas(categoria);
        });
    });

    function MonthsExperienceCanvas(dates) {
        const currentDate = new Date(); // Obtener la fecha actual
        const monthsExperiences = [];

        for (const dateStr of dates) {
            const startDate = new Date(dateStr);
            const differenceMonths = (currentDate.getFullYear() - startDate.getFullYear()) * 12 + (currentDate.getMonth() - startDate.getMonth());
            monthsExperiences.push(differenceMonths);
        }

        return monthsExperiences;
    }




    var popCanvas = document.getElementById("popBackend");
    // Llamando a la funcion para calcular meses de experiencia con las tecnologias
    const datesBackend = ['2023-06-01', '2023-11-01', '2022-01-15', '2022-01-15', '2023-06-01'];
    const monthsExperienceBackend = MonthsExperienceCanvas(datesBackend);

    new Chart(popCanvas, {
        type: 'bar',
        data: {
            labels: ["Laravel", "Java", "MySQL", "PHP", "MariaDB"],
            datasets: [{
                axis: 'y',
                label: 'Meses',
                data: monthsExperienceBackend,
                fill: false,
                backgroundColor: [
                    'rgba(219, 58, 52, 0.5)',
                    'rgba(255, 159, 64, 0.5)',
                    'rgba(242, 145, 17, 0.5)',
                    'rgba(72, 76, 137, 0.5)',
                    'rgba(139, 69, 19, 0.5)'
                ],
                borderColor: [
                    'rgb(219, 58, 52)',
                    'rgb(255, 159, 64)',
                    'rgb(242, 145, 17)',
                    'rgb(72, 76, 137)',
                    'rgb(139, 69, 19)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y',
            plugins: {
                legend: {
                    display: false
                },
                datalabels: { // Configuración del plugin datalabels
                    color: 'white',
                    anchor: 'end',
                    align: 'end',
                }
            },
            scales: {
                y: {
                    ticks: {
                        font: {
                            size: 14,
                            family: 'Arial',
                            style: 'normal',
                            weight: 'bold',
                        },
                        color: 'white'
                    }
                },
                x: {
                    ticks: {
                        font: {
                            size: 14,
                            family: 'Arial',
                            style: 'normal',
                            weight: 'bold',
                        },
                        color: 'white'
                    },
                    suggestedMin: 0,
                    suggestedMax: 30,
                }
            }
        }
    });




    // Logica de chart Frontend
    var popCanvas = document.getElementById("popFrontend");
    // Llamando a la funcion para calcular meses de experiencia con las tecnologias
    const datesFrontend = ['2022-01-15', '2022-01-15', '2022-01-15', '2023-01-15', '2024-01-01', '2024-01-01', '2024-01-01', '2024-01-01'];
    const monthsExperienceFrontend = MonthsExperienceCanvas(datesFrontend);
    // console.log('Diferencias en meses:', monthsExperienceFrontend);
    new Chart(popCanvas, {
        type: 'bar',
        data: {
            labels: ["HTML", "CSS", "Javascript", "Bootstrap", "AntDesign", "NextJS", "Typescript", "React"],
            datasets: [{
                axis: 'y',
                label: 'Meses',
                data: monthsExperienceFrontend,
                fill: false,
                backgroundColor: [
                    'rgba(227, 76, 38, 0.5)',
                    'rgba(38, 77, 228, 0.5)',
                    'rgba(240, 219, 79, 0.5)',
                    'rgba(86, 61, 124, 0.5)',
                    'rgba(245, 34, 45, 0.5)',
                    'rgba(0,0,0, 0.5)',
                    'rgba(0, 122, 204, 0.5)',
                    'rgba(97, 219, 251, 0.5)',
                ],
                borderColor: [
                    'rgb(227, 76, 38)',
                    'rgb(38, 77, 228)',
                    'rgb(240, 219, 79)',
                    'rgb(86, 61, 124)',
                    'rgb(245, 34, 45)',
                    'rgb(0,0,0)',
                    'rgb(0, 122, 204)',
                    'rgb(97, 219, 251)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y',
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    ticks: {

                        font: {
                            size: 14,
                            family: 'Arial',
                            style: 'normal',
                            weight: 'bold',
                        },
                        color: 'white'
                    },
                    suggestedMin: 0,
                    suggestedMax: 30,
                },
                x: {
                    ticks: {
                        font: {
                            size: 14,
                            family: 'Arial',
                            style: 'normal',
                            weight: 'bold',
                        },
                        color: 'white'
                    },
                    suggestedMin: 0,
                    suggestedMax: 30,
                }
            }
        }
    });



    var popCanvas = document.getElementById("popHerramientas");
    // Llamando a la funcion para calcular meses de experiencia con las tecnologias
    const datesSkills = ['2022-05-15', '2024-01-01', '2022-01-15', '2023-05-15', '2023-02-01', '2024-01-01', '2023-10-01'];
    const monthsExperienceSkills = MonthsExperienceCanvas(datesSkills);
    new Chart(popCanvas, {
        type: 'bar',
        data: {
            labels: ["Git", "Gitlab", "VSC", "Docker", "Xampp", "NPM", "Wordpress"],
            datasets: [{
                axis: 'y',
                label: 'Meses',
                data: monthsExperienceSkills,
                fill: false,
                backgroundColor: [
                    'rgba(61, 45, 0, 0.5)',
                    'rgba(226, 67, 42, 0.5)',
                    'rgba(0, 120, 215, 0.5)',
                    'rgba(13, 183, 237, 0.5)',
                    'rgba(251, 122, 36, 0.5)',
                    'rgba(204, 53, 52, 0.5)',
                    'rgba(0, 116, 156, 0.5)'
                ],
                borderColor: [
                    'rgb(61, 45, 0)',
                    'rgb(226, 67, 42)',
                    'rgb(0, 120, 215)',
                    'rgb(13, 183, 237)',
                    'rgb(251, 122, 36)',
                    'rgb(204, 53, 52)',
                    'rgb(0, 116, 156)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y',
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    ticks: {

                        font: {
                            size: 14,
                            family: 'Arial',
                            style: 'normal',
                            weight: 'bold',
                        },
                        color: 'white'
                    },
                    suggestedMin: 0,
                    suggestedMax: 30,
                },
                x: {
                    ticks: {
                        font: {
                            size: 14,
                            family: 'Arial',
                            style: 'normal',
                            weight: 'bold',
                        },
                        color: 'white'
                    },
                    suggestedMin: 0,
                    suggestedMax: 30,
                }
            }
        }
    });



    // Fecha de inicio y fecha actual
    var startDate = new Date('2021-11-01');
    var currentDate = new Date();

    // Calcular la diferencia en milisegundos
    var difference = currentDate - startDate;

    // Calcular años
    var years = Math.floor(difference / (1000 * 60 * 60 * 24 * 365.25));

    // Calcular meses
    var months = Math.floor((difference % (1000 * 60 * 60 * 24 * 365.25)) / (1000 * 60 * 60 * 24 * 30.44));

    // Calcular días
    var days = Math.floor((difference % (1000 * 60 * 60 * 24 * 30.44)) / (1000 * 60 * 60 * 24));


    // Crear la cadena de texto con la diferencia
    var experienceText = years + " años - " + months + " meses - " + days + " días ";

    // Mostrar la diferencia en el elemento HTML
    document.getElementById("experience").innerText = experienceText;




    function isOnScreen(el) {
        var rect = el.getBoundingClientRect();
        var windowHeight = window.innerHeight || document.documentElement.clientHeight;
        var umbral = 0.1; // Umbral del 50%
        return (
            rect.top <= windowHeight * (1 - umbral) &&
            rect.bottom >= windowHeight * umbral
        );
    }

    function addAnimation() {
        var cocolab = document.getElementById('Cocolab');
        var secretaria = document.getElementById('Secretaria');
        var sprogramacion = document.getElementById('Sprogramacion');
        var timeline = document.getElementById('experience-title');

        if (isOnScreen(timeline)) {
            cocolab.classList.remove('d-none')
            cocolab.classList.add('animate__animated', 'animate__fadeInLeft');
            secretaria.classList.remove('d-none')
            secretaria.classList.add('animate__animated', 'animate__fadeInRight');
            sprogramacion.classList.remove('d-none')
            sprogramacion.classList.add('animate__animated', 'animate__fadeInLeft');
        }

    }
    window.addEventListener('scroll', addAnimation);

});




function filtrarTarjetas(categoria) {
    var tarjetas = document.querySelectorAll('.tarjeta');
    tarjetas.forEach(function (tarjeta) {
        if (tarjeta.classList.contains(categoria) || categoria === 'Todos') {
            tarjeta.style.display = 'block';
        } else {
            tarjeta.style.display = 'none';
        }
    });
}

function openModal(clickedImg) {
    document.getElementById('myModal').classList.add('animate__animated', 'animate__fadeIn');
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImg");
    var imgSrc = clickedImg.getAttribute('src');
    modal.style.display = "block";
    modalImg.src = imgSrc;
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

function openModalDescription(titulo, subtitulo, imagen, descripcion,) {
    document.getElementById('proyectsModal').classList.add('animate__animated', 'animate__slideInDown');
    document.getElementById('proyectsModal').style.display = 'block';
    document.getElementById('titleModal').innerText = titulo;
    document.getElementById('subtitleModal').innerText = subtitulo;
    document.getElementById('imgModal').src = imagen;
    document.getElementById('bodyModal').innerText = descripcion;
    document.getElementById('btn-back').classList.add('d-none');
}

function closeModalDescription() {
    document.getElementById('proyectsModal').style.display = 'none';
    document.getElementById('btn-back').classList.remove('d-none');
}






