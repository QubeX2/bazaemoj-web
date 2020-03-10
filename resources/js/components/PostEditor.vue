<template>
    <div class="card">
        <div class="card-header">{{header}} <i @click="cancelPost()" v-show="edFocus == true" class="mt-1 fa fa-times text-secondary fa-pull-right"></i></div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <textarea ref="post" @focus="startEdit($event)" class="form-control" rows="1" :placeholder="placeholder" v-model="text" style="font-size: large;"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button :disabled="text.length == 0" v-show="edFocus == true" type="button" class="btn btn-primary bz-w100 mt-2">{{buttonText}}</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'placeholder',
            'buttonText',
            'header'
        ],
        data: function() {
            return {
                text: '',
                edFocus: false,
            };
        },
        methods: {
            cancelPost() {
                this.edFocus = false;
                this.text = '';
                $(this.$refs.post).attr('rows', 1).css('font-size', 'large');
            },
            startEdit(event) {
                $(this.$refs.post).attr('rows', 3).css('font-size', 'initial');
                this.edFocus = true;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
