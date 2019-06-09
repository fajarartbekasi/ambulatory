<script type="text/ecmascript-6">
    export default {}
</script>

<template>
    <index-view title="Medical Forms" resource="medical-form" >
        <router-link slot="btn-new-entry" :to="{name:'medical-form-new'}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            New
        </router-link>

        <template slot="group-item" slot-scope="slotProps">
            <router-link :to="{name:'medical-form-edit', params:{id: slotProps.entry.id}}">
                <div class="hover:bg-gray-100">
                    <div class="flex justify-between mb-1 px-6">
                        <h5 class="text-gray-600">{{slotProps.entry.form_name}}</h5>
                        <small class="text-gray-600">{{timeAgo(slotProps.entry.created_at)}}</small>
                    </div>
                    <p class="text-gray-600 px-6">{{slotProps.entry.full_name}} - {{slotProps.entry.address}}</p>
                </div>
            </router-link>
        </template>
    </index-view>
</template>
