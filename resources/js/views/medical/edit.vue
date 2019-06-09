<script type="text/ecmascript-6">
    export default {}
</script>

<template>
    <form-entry title="Medical Form" resource="medical-form" okToSave>
        <div slot="form-information" class="bg-teal-100 text-teal-800 px-4 py-3 mb-4" role="alert">
            <div class="flex items-center">
                    <div class="py-2">
                        <svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                            </svg>
                        </div>
                    <div>
                    <p class="sm:text-sm text-xs">
                        This Medical form is about the patient's biodata, you can have more than one form for your family, so please answer
                        thoughtfully and carefully.
                    </p>

                </div>
            </div>
        </div>

        <template slot="entry-data" slot-scope="slotProps" class="w-full max-w-lg">
            <div class="mb-2">
                <label class="block text-teal-900 font-bold md:text-justify ml-3 mb-1 md:mb-0 pr-4">
                    Medical form name
                </label>
                <p class="text-xs pt-2 text-gray-900 ml-3 mr-3">
                    Give this form a name. e.g
                    <span class="text-teal-600 text-bold">
                        My form, My Grandpa
                    </span>
                    or whatever is appropriate.
                </p>
            </div>
            <div class="flex flex-wrap mb-2 border-b">
                <div class="w-full px-3">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        id="my-form"
                        type="text"
                        placeholder="my-form"
                        v-model="slotProps.formData.form_name"
                        >
                         <form-errors :errors="slotProps.formErrors.form_name"></form-errors>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-teal-900 font-bold md:text-justify ml-3 mb-1 md:mb-0 pr-4">
                    Patient details
                </label>
                <p class="text-xs pt-2 text-gray-900 ml-3">
                    All fields or than home phone ones are required.
                </p>
            </div>
            <div class="flex flex-wrap mb-1">
                <div class="w-full px-3">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="text"
                            placeholder="patient form name"
                            v-model="slotProps.formData.full_name"
                            >
                        <form-errors :errors="slotProps.formErrors.full_name"></form-errors>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="date"
                            v-model="slotProps.formData.dob">
                    <form-errors :errors="slotProps.formErrors.dob"></form-errors>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <div class="relative">
                        <select
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-900 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            v-model="slotProps.formData.gender">
                            <option disabled value="">Please select one gender.</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        <form-errors :errors="slotProps.formErrors.gender"></form-errors>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="text"
                            placeholder="City.."
                            v-model="slotProps.formData.city">
                    <form-errors :errors="slotProps.formErrors.city"></form-errors>
                </div>
            </div>
            <div class="flex flex-wrap mb-6 mb-2 ">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="text"
                            v-model="slotProps.formData.state"
                            placeholder="state..">
                    <form-errors :errors="slotProps.formErrors.state"></form-errors>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="text"
                            v-model="slotProps.formData.address"
                            placeholder="address..">
                    <form-errors :errors="slotProps.formErrors.address"></form-errors>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="text"
                            v-model="slotProps.formData.zip_code"
                            placeholder="Zip code..">
                    <form-errors :errors="slotProps.formErrors.zip_code"></form-errors>
                </div>
            </div>
            <div class="flex flex-wrap mb-6">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="number"
                            v-model="slotProps.formData.home_phone"
                            placeholder="Home phone number..">
                    <form-errors :errors="slotProps.formErrors.home_phone"></form-errors>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <input class="appearance-none block w-full bg-gray-200 text-gray-900 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            type="number"
                            v-model="slotProps.formData.cell_phone"
                            placeholder="Cell phone..">
                    <form-errors :errors="slotProps.formErrors.cell_phone"></form-errors>
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 ">
                    <div class="relative">
                        <select v-model="slotProps.formData.marital_status"
                                class="block appearance-none w-full bg-gray-200 border-gray-900 text-gray-900 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                            >
                            <option disabled value="">Marital status</option>
                            <option>Single</option>
                            <option>Maried</option>
                            <option>Divorced</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                        <form-errors :errors="slotProps.formErrors.marital_status"></form-errors>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mb-2 px-3">
                <div class="w-1/3">
                    <label for="" class="text-xs sm:text-xl text-teal-600 font-bold  mb-6">
                        What's Next ??
                    </label>
                </div>
                <div class="sm:w-1/2 ">
                    <p class="text-xs mr-1 ml-3 sm:text-sm text-teal-600">
                        Once you have the medical form,
                        you can select the form when making an appointment.
                    </p>
                </div>
            </div>

        </template>
    </form-entry>
</template>