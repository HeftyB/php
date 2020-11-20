@extends("layouts.layout")


@section("content")
<div class="container inner-wrapper">
    <div class="container" id="head">
        <h1 class="display-4 text-center"> HeftyB <img src="./img/logo.png" alt="logo" id="logo"> Web Dev</h1>
    </div>
    <hr>
    <div class="jumbotron">
        <div class="row">
            <div class="myPhoto col">
                <img class="rounded-circle img-responsive me" src="https://avatars2.githubusercontent.com/u/35949416?s=460&u=dfa1f58c9cc58038e01ae0401ef14f1c28bbb442&v=4" alt="Andrew Shields">
            </div>
            <div class="container col d-flex align-items-center">
                <p class="lead" class="align-middle">Welcome, I am Andrew Shields, a Web Devloper / Software Engineer and this is my personal piece of the World Wide Web. I have been fixing electronics and bulding computers for over 15 years and I am blah blah blah here is a whole paragraph of me typing some shiznit out yo. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto sit nemo unde facere accusamus ex quaerat, error placeat eum iste minus, nesciunt, dolor commodi aperiam! Voluptatum, iure dolorem. Vitae libero, expedita ea deserunt natus quia tempora. Numquam aliquid officiis temporibus nihil, sin</p>
            </div>
        </div>
    </div>

    <div class="mid">
        <div class="">
            <h3 class="text-center dev-title">Development Technologies:</h3>
        </div>
        <div class="tech-stack col">
            <table>
                <tbody>
                    <tr valign="top">
                        <td width="10%" align="center">
                            <span><strong>HTML5</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/html-5.svg">
                        </td> 
                        <td width="10%" align="center">
                            <span><strong>CSS3</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/css-3.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>JavaScript</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/javascript.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>React</strong></span><br><br>
                            <img height="64px" src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>Redux</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/redux.svg">
                        </td>
                        
                        <td width="10%" align="center">
                            <span><strong>Java</strong></span><br><br>
                            <img height="64px" src="https://www.vectorlogo.zone/logos/java/java-ar21.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>Spring Boot</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/spring.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>PostGreSQL</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/postgresql.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>Node</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/nodejs.svg">
                        </td>
                    </tr>    
                    <tr valign="top">
                        <td width="10%" align="center">
                            <span><strong>MongoDB</strong></span><br><br>
                            <img height="20px" src="https://cdn.svgporn.com/logos/mongodb.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>Python</strong></span><br><br>
                            <img height="64px" src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/267_Python_logo-128.png">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>Flask</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/flask.svg">
                        </td> 
                        <td width="10%" align="center">
                            <span><strong>Bootstrap</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/bootstrap.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>Docker</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/docker-icon.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>Linux</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/linux-tux.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>Apache</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/apache.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>MySQL</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/mysql.svg">
                        </td>
                        <td width="10%" align="center">
                            <span><strong>PHP</strong></span><br><br>
                            <img height="64px" src="https://cdn.svgporn.com/logos/php.svg">
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
                    <h5 class="mb-1">Lamp Stack (this website)</h5>
                    <small>always a work in progress</small>
                </div>
                <p class="mb-1">This website is a part of a LAMP stack (Linux, Apache, MySQL, PHP), with the Laravel framework. I origi</p>
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