const editForm = document.getElementById('edit-review');
const editBtns = document.getElementsByClassName('edit-review');

const cancelBtn = editForm.querySelector('input[value="Cancel"]')
const title = editForm.querySelector('input[name="title"]')
const rating = editForm.querySelector('input[name="rating"]')
const review = editForm.querySelector('textarea[name="review"]')
const reviewid = editForm.querySelector('input[name="reviewid"]')

cancelBtn.addEventListener('click', e=>{
    e.preventDefault()
    editForm.style.display = 'none'
})

Array.from(editBtns).forEach(btn => {
    btn.addEventListener('submit', e=>{
        e.preventDefault()
        editForm.style.display = 'flex'
        reviewid.value = e.target.dataset.id
        title.value = e.target.dataset.title
        rating.value = e.target.dataset.rating
        review.value = e.target.dataset.review
    })
})