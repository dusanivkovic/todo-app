const checkboxes = document.querySelectorAll('input[type=checkbox]');
checkboxes.forEach(ch => ch.addEventListener('click', (e) =>{
    e.target.parentNode.submit();
}))
const addTask = document.querySelector('input[type=text]');
if (window.location.href.match('error'))
{
    addTask.style.borderColor = 'red';
}
