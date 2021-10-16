<template>
<div>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="form row g-0 ">
                <div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg br-ts-7 br-bs-7 mb-0">
                    <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
                        <optgroup label="Categories">
                            <option>Select</option>
                            <option value="1">IT</option>
                            <option value="2">Language</option>
                            <option value="3">Science</option>
                            <option value="4">Health</option>
                            <option value="5">Humanities</option>
                            <option value="6">Business</option>
                            <option value="7">Maths</option>
                            <option value="8">Marketing</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0">
                    <input type="text" class="form-control input-xl br-0" placeholder="Search Price..." data-min-length="1" list="courses" name="courses">
                </div>
                <div class="form-group  col-xl-5 col-lg-5 col-md-12 mb-0">
                    <input type="text" class="form-control input-xl br-0" placeholder="Search Courses...." data-min-length="1" list="courses" name="courses">
                </div>
                <div class="col-xl-1 col-lg-1 col-md-12 mb-0">
                    <a id="icon_search" href="javascript:void(0)" class="btn btn-xl btn-block btn-secondary br-ts-md-0 br-bs-md-0"><i class="fe fe-search"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "Search"
}
</script>

<style scoped>
#icon_search{
    padding: 15px;
}
</style>
