@extends('layouts.main')

@section('content')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody id="thread-list">



        </tbody>
    </table>
@endsection

@section('scripts')
    <script>
        let thread_list = document.querySelector('#thread-list')
        window.onload = function (){
            getAllThreads();
        }

        async function getAllThreads(){
            await fetch('http://127.0.0.1/api/threads')
            .then(response => response.json())
            .then(data => {
                showThreads(data)
            })
            .catch(error => console.log(error))
        }

        function showThreads(data){
            data.forEach(thread => {
                thread_list.innerHTML += `
                <tr>
                    <th>${thread.id}</th>
                    <th>${thread.title}</th>
                    <th>${thread.description}</th>
                    <th>${thread.user_id}</th>
                </tr>
                `
            })
        }
    </script>
@endsection
