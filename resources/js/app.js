import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

export default function counter() {
    return {
        count: 0,
        increment() {
            this.count++;
        },
        decrement() {
            this.count--;
        },
    };
}