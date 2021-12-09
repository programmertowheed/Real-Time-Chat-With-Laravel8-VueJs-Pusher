<template>
    <div>
        <li class="list-group-item" :class="className"><slot></slot></li>
        <span id="time">{{ time }}</span></li>
        <small class="badge float-end" :class="badgeClass">{{ user }}</small>
    </div>
</template>

<script>
    export default {
        props:[
            'color',
            'user',
            'time'
        ],
        computed:{
            className(){
                return 'list-group-item-'+this.color;
            },
            badgeClass(){
                return 'bg-'+this.color;
            }
        },
        mounted() {
           
        }
    }
</script>
<style>
    #time{
        font-size: 9px;
        margin-top: 10px;
        color: black;
    }
</style>
