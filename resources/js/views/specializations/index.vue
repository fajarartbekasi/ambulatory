<script type="text/ecmascript-6">
    export default {}
</script>

<template>
    <index-view title="Specializations" resource="specializations">
        <router-link slot="btn-new-entry" :to="{name:'specializations-new'}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
            New
        </router-link>

        <template slot="group-item" slot-scope="slotProps">
            <router-link :to="{name:'specializations-edit', params:{id: slotProps.entry.id}}">
                <div class="px-6 hover:bg-gray-100">
                    <div class="flex justify-between">
                        <h5 class="mb-1 text-gray-900">{{slotProps.entry.name}}</h5>
                        <small class="text-gray-500">{{timeAgo(slotProps.entry.created_at)}}</small>
                    </div>
                    <p class="mb-1 text-gray-700">{{slotProps.entry.description}}</p>
                </div>
            </router-link>
        </template>
    </index-view>
</template>