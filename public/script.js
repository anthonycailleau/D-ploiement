document.addEventListener('DOMContentLoaded', function () {
    const changeViewButton =
        document.getElementById('changeViewButton');
    const bookContainer = document.getElementById('bookContainer');
    const listContainer = document.getElementById('listContainer');

    changeViewButton.addEventListener('click', function () {
        bookContainer.classList.toggle('hidden');
        listContainer.classList.toggle('hidden');
    })
})