@extends("layouts.layout")


@section("content")
<div class="container">

<h1>Hello!</h1>

<div class="jumbotron">
    <div class="row">
        <div class="myPhoto col">
            <img class="rounded-circle" src="https://avatars2.githubusercontent.com/u/35949416?s=460&u=dfa1f58c9cc58038e01ae0401ef14f1c28bbb442&v=4" alt="Andrew Shields">
        </div>
        <div class="container col">
            <h1 class="display-4">Yo whats up?</h1>
            <p class="lead">Welcome to HeftyB's site. blah blah blah here is a whole paragraph of me typing some shiznit out yo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto sit nemo unde facere accusamus ex quaerat, error placeat eum iste minus, nesciunt, dolor commodi aperiam! Voluptatum, iure dolorem. Vitae libero, expedita ea deserunt natus quia tempora. Numquam aliquid officiis temporibus nihil, sint laborum recusandae necessitatibus dignissimos nulla possimus ex aspernatur reiciendis ad aut neque, odio quas nam saepe dolor itaque sit commodi! Beatae atque, accusantium optio earum itaque aut dolor, expedita corrupti maiores quis provident!</p>
        </div>
    </div>
</div>

<div class="mid row">
    <div class="col">
        <h3>My Main Tech Stack:</h3>
    </div>
    <div class="tech-stack col">
        <table>
            <tbody>
                <tr valign="top">
                    <td width="25%" align="center">
                        <span>𝗛𝗧𝗠𝗟𝟱</span><br><br><br>
                        <img height="64px" src="https://cdn.svgporn.com/logos/html-5.svg">
                    </td> 
                    <td width="25%" align="center">
                        <span>𝗖𝗦𝗦𝟯</span><br><br><br>
                        <img height="64px" src="https://cdn.svgporn.com/logos/css-3.svg">
                    </td>
                    <td width="25%" align="center">
                        <span>𝗝𝗮𝘃𝗮𝗦𝗰𝗿𝗶𝗽𝘁</span><br><br><br>
                        <img height="64px" src="https://cdn.svgporn.com/logos/javascript.svg">
                    </td>
                </tr>
                <tr valign="top">
                    <td width="25%" align="center">
                        <span><strong>React</strong></span><br><br><br>
                        <img height="64px" src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png">
                    </td>
                    <td width="25%" align="center">
                        <span><strong>Redux</strong></span><br><br><br>
                        <img height="64px" src="https://cdn.svgporn.com/logos/redux.svg">
                    </td>
                    <td width="25%" align="center">
                        <span><strong>Python</strong></span><br><br><br>
                        <img height="64px" src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/267_Python_logo-128.png">
                    </td>
                </tr>
                <tr valign="top">
                    <td width="25%" align="center">
                        <span><strong>Java</strong></span><br><br><br>
                        <img height="64px" src="https://www.vectorlogo.zone/logos/java/java-ar21.svg">
                    </td>
                    <td width="25%" align="center">
                        <span><strong>Spring Boot</strong></span><br><br><br>
                        <img height="64px" src="https://cdn.svgporn.com/logos/spring.svg">
                    </td>
                    <td width="25%" align="center">
                        <span><strong>PostGreSQL</strong></span><br><br><br>
                        <img height="64px" src="https://cdn.svgporn.com/logos/postgresql.svg">
                    </td>
                </tr>    
            </tbody>
        </table>
    </div>
</div>

<hr>

<div class="projects">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small>Donec id elit non mi porta.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
            <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
    </div>
</div>
@endsection