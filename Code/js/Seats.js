//Uses javascript to allow user to select seats and preoccupies the occupied seats

const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied)');


const populateUI = () => {
    const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));

    if (selectedSeats !== null && selectedSeats.length > 0){
        seats.forEach((seat, index) => {
            if(selectedSeats.indexOf(index) > -1) {
                seat.classList.add('selected');
            }
        });
    }
};

populateUI();

const updateSelectedSeatsCount = () => {
    const selectedSeats = document.querySelectorAll('.row .selected');
    const seatsIndex = [...selectedSeats].map(seat => [...seats].indexOf(seat));

    localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

    // const selectedSeatsCount = selectedSeats.length;
};

container.addEventListener('click', e => {
    if(e.target.classList.contains('seat') && !e.target.classList.contains('occupied')){
        e.target.classList.toggle('selected');
        updateSelectedSeatsCount();
    }
});
