/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app',
//     data: function() {
//         return {
//             image: '',
//             role_filtered: 0,
//             client_filtered: 0,
//             department_filtered: 0,
//             position_filtered: 0
//         }
//     },
//     methods: {
//         onFileChange(e) {
//             let files = e.target.files || e.dataTransfer.files;
//             if (!files.length)
//                 return;
//             this.createImage(files[0]);
//         },
//
//         createImage(file) {
//             let image = new Image();
//             let reader = new FileReader();
//             let vm = this;
//
//             reader.onload = (e) => {
//                 vm.image = e.target.result;
//             };
//             reader.readAsDataURL(file);
//         },
//
//         removeImage(e) {
//             this.image = '';
//         },
//
//         onSelectChange(e) {
//             console.log(this.client_filtered);
//
//             if(0 != this.client_filtered) {
//                 $('select[name="department_id"]').prop( "disabled", true );
//                 $('select[name="position_id"]').prop( "disabled", true );
//             } else {
//                 $('select[name="department_id"]').prop( "disabled", false );
//                 $('select[name="position_id"]').prop( "disabled", false );
//             }
//         }
//     }
// });

// Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
