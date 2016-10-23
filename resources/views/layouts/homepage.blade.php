<!DOCTYPE html>
<html>
<head>
    @include('layout-partials.head')
</head>
<body>
    @include('layout-partials.nav')
    <header id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <hgroup class="text-center">
                            <h1>People Who Park Like Poop</h1>
                            <h2>They Really Grind My Gears!</h2>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="notice-them" class="container-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hgroup class="section-header text-center">
                        <h4>Notice Them</h4>
                        <h3>That feeling you see a hard parked car</h3>
                    </hgroup>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <article class="section-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut mauris sollicitudin, interdum lacus sed, condimentum nibh. Fusce purus velit, condimentum vitae venenatis a, euismod vel leo. Etiam pharetra tincidunt nunc eget suscipit. Aliquam neque felis, molestie et iaculis sed, cursus ac augue. Etiam sit amet urna id odio imperdiet viverra ultrices nec neque.
                    </article>
                </div>
            </div> 
        </div>
    </div>
    <div id="expose-them" class="expose-them-container container-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hgroup class="section-header text-center">
                        <h4>Expose Them</h4>
                        <h3>Time to let these punks know how we feel</h3>
                    </hgroup>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <article class="section-text text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut mauris sollicitudin, interdum lacus sed, condimentum nibh. Fusce purus velit, condimentum vitae venenatis a, euismod vel leo. Etiam pharetra tincidunt nunc eget suscipit. Aliquam neque felis, molestie et iaculis sed, cursus ac augue. Etiam sit amet urna id odio imperdiet viverra ultrices nec neque.
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="expose-them-container container-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="what-to-do">
                        <div class="icon spot-them"></div>
                        <div class="description-container">
                            <div class="description-header">Spot Them</div>
                            <div class="description-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui urna, bibendum sit amet leo eget. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="what-to-do">
                        <div class="icon capture-them"></div>
                        <div class="description-container">
                            <div class="description-header">Capture Them</div>
                            <div class="description-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui urna, bibendum sit amet leo eget. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="what-to-do">
                        <div class="icon card-them"></div>
                        <div class="description-container">
                            <div class="description-header">Card Them</div>
                            <div class="description-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui urna, bibendum sit amet leo eget. 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="what-to-do">
                        <div class="icon tag-them"></div>
                        <div class="description-container">
                            <div class="description-header">Tag Them</div>
                            <div class="description-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui urna, bibendum sit amet leo eget. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="get-them" class="get-them-container container-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <div class="homepage-business-cards"></div>
                </div>
                <div class="col-md-6 col-sm-7">
                    <hgroup class="section-header">
                        <h4>get them</h4>
                        <h3>Card Them. Run away gleefully.</h3>
                    </hgroup>
                    <article>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui urna, bibendum sit amet leo eget. 
                    </article>
                    <div class="text-right">
                        <a href="/get-cards" class="btn btn-submit" title="Let's get some cards!">Get some cards!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact-us" class="contact-us-container container-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <hgroup class="section-header">
                        <h4>contact us</h4>
                        <h3>Have Questions? Have suggestions? What about card quotes?</h3>
                    </hgroup>
                    <article>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui urna, bibendum sit amet leo eget. 
                    </article>
                </div>
                <div class="col-md-6 col-sm-6">
                    <form>
                        <div class="form-group">
                            <label>What's your email?</label>
                            <input type="text" class="form-control" placeholder="yourname@whereever.com">
                        </div>
                        <div class="form-group">
                            <label>What's on your mind?</label>
                            <textarea class="form-control" placeholder="Don't be shy! Tell us :D"></textarea>
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-submit" title="Contact us!">Send!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layout-partials.foot')
</body>
</html>