import './bootstrap';
import.meta.glob(['../images/**']);
const helloLaravel = {
    'name': 'Laravel',
    'message': 'Hello'
};

for (const [key, value] of Object.entries(helloLaravel)) {
    console.log(key + ': ' + value);
}

document.querySelector('body').insertAdjacentHTML('beforeend', `<p>${helloLaravel.message}, ${helloLaravel.name}!</p>`);

