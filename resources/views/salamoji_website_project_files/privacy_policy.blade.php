@extends('salamoji_website_project_files.main_of_salamoji')


@section('title' , ' / privacy_policy')


@section('content')

<style>
    #pdf_viewer{

        height:1000px;
        font-size: 30px;

    }
</style>


<div class="container-fluid">

    <div id="pdf_viewer"></div>

</div>


<script>

    $(document).ready(function (){

        PDFObject.embed('{{asset('selamoji-privacy-policy.pdf')}}' , '#pdf_viewer');


    });




</script>

@stop
