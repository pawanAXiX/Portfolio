import './bootstrap';



document.addEventListener('DOMContentLoaded', function () {
    let button=document.querySelector('button')
    button.addEventListener('click',()=>{
        console.log("hello")
        Livewire.emit('triggerMethod', 'Hello from JavaScript!', 123);
    })
});
