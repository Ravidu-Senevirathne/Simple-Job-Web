<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
    <x-forms.input label ="Title" name="title" placeholder="CEO">
    <x-forms.input label ="Salary" name="salary" placeholder="90,000 LKR">
    <x-forms.input label ="L
    ocation" name="location" placeholder="Colombo">

    <x-froms.select label="Schedule" name="schedule">
        <option>Part Time</option>
        <option>Full Time</option>
    </x-froms.select>

    <x-forms.input label ="URL" name="url" placeholder="https://jobs.lk/jobs/test">


    <x-forms.input label ="Tags (comma separated)" name="tags" placeholder="simplejob,education,video">


    <x-forms.button>Publish</x-forms.button>


        
   
    <x-forms.input>
    </x-forms.form>
</x-layout>