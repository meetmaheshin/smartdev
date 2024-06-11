@extends('layouts.static')
@section('body')

<body>
    @endsection
    @section('css')
    <link rel="stylesheet" href="{{asset('css/home-screen.css')}}">

    @endsection
    @section('banner')
    <div class="banner-content">
        <div class="banner-lft-item">
            <div class="titile-blk">
                <p>A <span>Web3.0</span> Ecosystem to assist you at every stage of <span>Web 3.0</span>
                    product lifecycle
                </p>
            </div>
            <div class="button-blk">
                <span class="custom-btn color-btn" onclick="joinUsModal()">Join Us</span>
                <a href="{{url('/hire-us')}}" class="custom-btn ">Hire Us</a>
            </div>
        </div>
        <div class="banner-rgt-item">
            <div class="web3-imgbox">
                <img src="{{url('images/web3.png')}}" width="3840" height="4028" alt="Web3">
            </div>
        </div>
    </div>
    @endsection
    @section('content')
    <section id="vision" class="element-panel mainfesto-panel">
        <div class="element-wrap">
            <div class="element-content-grid">

                <div class="col-item">
                    <div class="elm-img-box">
                        <figure>
                            <img src="{{url('images/manifesto.png')}}" width="1200" height="1755" alt="Manifesto">
                        </figure>

                    </div>

                </div>

                <div class="col-item">
                    <div class="elm-txt-blk">
                        <h2>Vision</h2>

                        <p>Web 3.0 is the future and with this belief we have created an ecosystem to reduce idea to
                            development time for Web3.0 ideas. If you have an idea for a Web 3.0 / Blockchain
                            Development project; you will find some of the best consultants, designers and
                            developers in SmartDev3 Ecosystem. </p>

                        <p>These fellows will hand hold you in your Web3.0 Journey. They are on the mission to make
                            Web 3.0 a reality and by sharing resources and leading good practices which are specific
                            to the blockhain </p>

                        <p>"We believe in Web3.0 and that is why we focus on Web3.0"</p>
                    </div>
                    <div class="button-blk">
                        <a href="{{url('/faqs')}}" class="custom-btn handbook-btn">FAQ's</a>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section id="services" class="element-panel services-panel">
        <div class="element-wrap">
            <div class="element-content-grid content-grid-rgt">
                <div class="col-item">
                    <div class="service-types">
                        <div class="service-col-item">
                            <div class="type-box">
                                <h3>Advisory & Idea Validation</h3>
                                <span class="type-icon">
                                    <img src="{{url('images/consultations.png')}}" width="96" height="96" alt="Service">
                                </span>
                                <p>Get expert advice on Idea Validation, Dev cost Estimation, Growth hacks; All at
                                    one place
                                </p>
                            </div>
                        </div>

                        <div class="service-col-item">
                            <div class="type-box">
                                <h3>Dapp Design / UX</h3>
                                <span class="type-icon">
                                    <img src="{{url('images/designsprints.png')}}" width="96" height="96" alt="Service">
                                </span>
                                <p>Nail the UX first! User friendly design; why should user care if it is Web3.0 or
                                    Web 2.0!
                                </p>
                            </div>
                        </div>

                        <div class="service-col-item">
                            <div class="type-box">
                                <h3>Full Stack Development
                                </h3>
                                <span class="type-icon">
                                    <img src="{{url('images/fullstackdev.png')}}" width="96" height="96" alt="Service">
                                </span>
                                <p>Smart Contracts or Dapps; Our fellows are best in the industry and will help you
                                    shape your dream into reality
                                </p>
                            </div>
                        </div>


                        <div class="service-col-item">
                            <div class="type-box">
                                <h3>Blockchain Audit
                                </h3>
                                <span class="type-icon">
                                    <img src="{{url('images/marketing.png')}}" width="96" height="96" alt="Service">
                                </span>
                                <p>
                                    You have got the code and need an expert opinion! Let our fellows give you
                                    feedback
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-item">
                    <div class="elm-txt-blk">
                        <h2>Services</h2>

                        <p>SmartDev3 is a top tier agency focusing on design and development in Web3.0 ecosystem . We
                            are deep into bleeding edge of technologies / concepts including Smart contract, DApp,
                            DAO and everything around it.</p>

                        <p>We have a fellowship for more than 200 developers who consistently strive to turn your
                            ideas and realities. Our developers have all the necessary experience, talent and
                            connections to deliver high quality output in the shortest possible time
                        </p>

                        <p>You may count on us for development of your product</p>
                    </div>
                    <div class="button-blk">
                        <a href="{{url('/hire-us')}}" class="custom-btn">Hire Us</a>
                    </div>

                </div>


            </div>
        </div>
    </section>

    <section id="portfolio" class="element-panel portfolio-panel">
        <div class="element-wrap">
            <div class="portfolio-txt-blk">
                <h2>Portfolio</h2>
                <p>We've developed everything from dApps, smart contracts, DAOs, Defi Dashboards, NFT Marketplaces.
                    No idea is overwhelming for us. Check out our portfolio for the glimpse of the work we have done
                    so far.</p>

                <div class="button-blk" style="display:none">
                    <a href="#" class="custom-btn color-btn">View Projects</a>
                </div>

            </div>

            <div class="portfolio-blk">
                <div class="portfolio-item">
                    <div class="portfolio-box">
                        <div class="portfolio-title-blk">
                            <h2>dApp Design and <span>Development</span></h2>
                        </div>

                        <p>ROVI is Web 3.0 Distribution protocol glued by $ROVI token. $ROVI token is minted on
                            polygon blockchain with smart contract on ERC-20 solidity token
                        </p>
                    </div>
                </div>


                <div class="portfolio-item">
                    <div class="portfolio-box">
                        <div class="portfolio-title-blk">
                            <h2>Ethereum Name Services <span>Fork</span></h2>
                        </div>

                        <p>Fork of Ethereum Naming Service with a different domain name. This domain has more 50
                            thousand users pre registered. Domain will be launched in Oct'22
                        </p>
                    </div>
                </div>


                <div class="portfolio-item">
                    <div class="portfolio-box">
                        <div class="portfolio-title-blk">
                            <h2>Non-fungible Token <span>Marketplace</span></h2>
                        </div>

                        <p>Story based NFT marketplace where NFT next version unlocks based on certain criteria.
                            Developed on ERC-721 solidity token</p>
                    </div>
                </div>



                <div class="portfolio-item">
                    <div class="portfolio-box">
                        <div class="portfolio-title-blk">
                            <h2>Blockchain based <span>Messaging</span></h2>
                        </div>

                        <p>Peer to Peer decentralized messaging app. One can send mesage from one wallet address to
                            another wallet address using this app. Developed in solidity language</p>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-box">
                        <div class="portfolio-title-blk">
                            <h2>Centralized <span>Exchange</span></h2>
                        </div>

                        <p>Centralized Brokerage Exchange. Integerated with multiple other exchanges. Algo based
                            decision for routing token purchase requests to a specific exchange</p>
                    </div>
                </div>


                <div class="portfolio-item">
                    <div class="portfolio-box">
                        <div class="portfolio-title-blk">
                            <h2>Etherscan API <span>Integration</span></h2>
                        </div>

                        <p>API based integration with etherscan to generate rule based trigger / notofication i.e.
                            if ETH is sold by a specific wallet then trigger is generated</p>
                    </div>
                </div>


            </div>


        </div>
    </section>

    <section id="join" class="element-panel join-panel">
        <div class="element-wrap">
            <div class="join-txt-blk">
                <h2>Join the Fellowship</h2>
                <p>We are always looking for top talents who can add value to our customers. If you are a top talent
                    or aspire to be a top talents' please register yourself. Someone from our assesment team will
                    contact you to understand your interests.</p>

                <div class="button-blk">
                    <span class="custom-btn join-btn" onclick="joinUsModal()">Join Us</span>
                </div>

            </div>

            <div class="why-join">
                <div class="join-item">
                    <div class="why-box">
                        <h3>Cutting Edge Technology </h3>
                        <span class="why-icon">
                            <img src="{{url('images/learning.png')}}" width="96" height="96" alt="Why Join">
                        </span>
                        <p>Join the SmartDev3 Fellowship and work on world changing technology / concepts - DAO,
                            Defi, Smart contract
                        </p>
                    </div>
                </div>

                <div class="join-item">
                    <div class="why-box">
                        <h3>Partner and Learn</h3>
                        <span class="why-icon">
                            <img src="{{url('images/cartelculture.png')}}" width="96" height="96" alt="Why Join">
                        </span>
                        <p>
                            Take your skill set to the next level by partnering with like minded and exceptional
                            talent across globe
                        </p>
                    </div>
                </div>


                <div class="join-item">
                    <div class="why-box">
                        <h3>Work from Anywhere</h3>
                        <span class="why-icon">
                            <img src="{{url('images/tipofthespear.png')}}" width="96" height="96" alt="Why Join">
                        </span>
                        <p>You decide where to work from and when to work. As long as you create value we want you
                            the fellowship!
                        </p>
                    </div>
                </div>

            </div>


        </div>
    </section>

    <section id="devs" class="element-panel developer-panel">
        <div class="element-wrap">
            <div class="developer-blk">
                <h2>World Class <span>Developers</span></h2>

                <div class="filter-tag-blk">
                    <span class="type-tag selected-tag" data-filter="*">#All</span>
                    <span class="type-tag" data-filter=".solidity">#Solidity</span>
                    <span class="type-tag" data-filter=".rust">#Rust</span>
                    <span class="type-tag" data-filter=".haskell">#Haskell</span>
                    <span class="type-tag" data-filter=".ui">#UI</span>
                    <span class="type-tag" data-filter=".react">#React</span>
                    <span class="type-tag" data-filter=".analyst">#Analyst</span>
                    <span class="type-tag" data-filter=".testing">#Testing </span>
                    <span class="type-tag" data-filter=".mobility">#Mobility </span>
                    <span class="type-tag" data-filter=".polygon">#Polygon </span>
                    <span class="type-tag" data-filter=".ethereum">#Ethereum </span>
                    <span class="type-tag" data-filter=".solana">#Solana </span>
                </div>

                <div class="developer-list">
                    <div class="team-col-item analyst">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Dinesh.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Jambo</h3>
                            <span class="job-title">
                                Analyst</span>
                        </div>
                    </div>

                    <div class="team-col-item mobility">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Chhavi_Agrawal.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>Pribotean</h3>
                            <span class="job-title">Mobility</span>
                        </div>
                    </div>

                    <div class="team-col-item .rust">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Akansha.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>Coffee Bucks</h3>
                            <span class="job-title">
                                Rust</span>

                        </div>

                    </div>


                    <div class="team-col-item react">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Mohit.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>Arya</h3>
                            <span class="job-title">
                                React</span>
                        </div>
                    </div>

                    <div class="team-col-item haskell">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Ritika.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>Cia</h3>
                            <span class="job-title">
                                Haskell</span>
                        </div>
                    </div>

                    <div class="team-col-item solana">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Jatin.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>Bytoholic</h3>
                            <span class="job-title">
                                Solana</span>
                        </div>
                    </div>

                    <div class="team-col-item .analyst">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Sakshi.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>Vibgyor</h3>
                            <span class="job-title">
                                Analyst</span>
                        </div>
                    </div>



                    <div class="team-col-item testing">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Shivani.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>Shyly</h3>
                            <span class="job-title">
                                Testing</span>
                        </div>
                    </div>

                    <div class="team-col-item polygon">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Vipul.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>DarthVader</h3>
                            <span class="job-title">
                                Polygon</span>
                        </div>
                    </div>


                    <div class="team-col-item .ethereum">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Bhuvesh.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>

                            </div>
                            <h3>MetallicFox</h3>
                            <span class="job-title">
                                Ethereum</span>
                        </div>
                    </div>

                    <div class="team-col-item solana">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Amit.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>The_Celestial</h3>
                            <span class="job-title">
                                Solana</span>
                        </div>
                    </div>

                    <div class="team-col-item ui">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Shruti.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>CrazyS</h3>
                            <span class="job-title">
                                UI</span>
                        </div>
                    </div>

                    <div class="team-col-item ethereum">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Atul.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Monk</h3>
                            <span class="job-title">
                                Ethereum</span>
                        </div>
                    </div>


                    <div class="team-col-item solana">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Ritik.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Ritik Gwala</h3>
                            <span class="job-title">
                                Solana</span>
                        </div>
                    </div>

                    <div class="team-col-item ui">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Anuj.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Ragnarok</h3>
                            <span class="job-title">
                                UI</span>
                        </div>
                    </div>


                    <div class="team-col-item solidity">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Manish.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Manish Dhol</h3>
                            <span class="job-title">
                                Solidity</span>
                        </div>
                    </div>


                    <div class="team-col-item rust">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Subhanshu.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Metacool</h3>
                            <span class="job-title">
                                Rust </span>
                        </div>
                    </div>

                    <div class="team-col-item haskell">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Harsh.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Harsh
                            </h3>
                            <span class="job-title">
                                Haskell</span>
                        </div>
                    </div>


                    <div class="team-col-item ui">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Shubham.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>UltraPunk
                            </h3>
                            <span class="job-title">
                                UI</span>
                        </div>
                    </div>

                    <div class="team-col-item analyst">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Piyush.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>RedDevil</h3>
                            <span class="job-title">
                                Analyst</span>
                        </div>
                    </div>


                    <div class="team-col-item testing">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Himanshu.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Jareth
                            </h3>
                            <span class="job-title">
                                Testing</span>
                        </div>
                    </div>


                    <div class="team-col-item mobility">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Chhavi_Arora.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>Orbiter

                            </h3>
                            <span class="job-title">
                                Mobility</span>
                        </div>
                    </div>

                    <div class="team-col-item polygon">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Nitish.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>CrazyPunk

                            </h3>
                            <span class="job-title">
                                Polygon</span>
                        </div>
                    </div>


                    <div class="team-col-item react">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Ankit.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                SciFi

                            </h3>
                            <span class="job-title">
                                React</span>
                        </div>
                    </div>

                    <div class="team-col-item ethereum">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Hitendra.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                Avalon

                            </h3>
                            <span class="job-title">
                                Ethereum</span>
                        </div>
                    </div>

                    <div class="team-col-item solidity ">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Riyaz.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                CrazyBird

                            </h3>
                            <span class="job-title">
                                Solidity </span>
                        </div>
                    </div>

                    <div class="team-col-item analyst ">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Akash.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                Meta Dude


                            </h3>
                            <span class="job-title">
                                Analyst </span>
                        </div>
                    </div>


                    <div class="team-col-item solidity ">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Swati.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                Wings


                            </h3>
                            <span class="job-title">
                                Solidity </span>
                        </div>
                    </div>


                    <div class="team-col-item mobility">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Vishal.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                OG Warrior
                            </h3>
                            <span class="job-title">
                                Mobility</span>
                        </div>
                    </div>

                    <div class="team-col-item ethereum">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Aman.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                Cosmo

                            </h3>
                            <span class="job-title">
                                Ethereum</span>
                        </div>
                    </div>


                    <div class="team-col-item react">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Muskan.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                Manikolic

                            </h3>
                            <span class="job-title">
                                React</span>
                        </div>
                    </div>


                    <div class="team-col-item .Solana">
                        <div class="dev-info-blk">
                            <div class="team-img-box">
                                <figure>
                                    <img src="{{url('images/our_team/Yaman.jpg')}}" width="400" height="400" alt="Team" />
                                </figure>
                            </div>
                            <h3>
                                Meta Sketch

                            </h3>
                            <span class="job-title">
                                Solana
                            </span>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </section>
    @endsection

    @section('modal')
    <div class="custom_modal" id="joinus_modal">
        <div class="modal-outer-blk">
            <div class="modal-inner-bg">
                <span class="close_mdl-btn" onclick="closeJoinUsModal()">

                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                    </svg>
                </span>
                <div class="modal-cnt-blk">
                    <div class="element-panel hire-elm-panel">
                        <h2>Join Us</h2>
                        <p>250+ Awesome DAO Developers and counting...</p>
                        <div class="form-elm-blk">
                            <div class="element-content-grid">
                                <div class="col-item">
                                    <div class="input_field_row">
                                        <input type="text" name="full_name" value="" placeholder="Full Name *" class="custom_input" required />
                                    </div>
                                </div>

                                <div class="col-item">
                                    <div class="input_field_row">
                                        <input type="text" name="email_id" value="" placeholder="Email Id *" class="custom_input" required />
                                    </div>
                                </div>

                            </div>

                            <div class="element-content-grid">
                                <div class="col-item">
                                    <div class="input_field_row">
                                        <input type="number" name="phone_no" value="" placeholder="Phone No *" class="custom_input" required />
                                    </div>
                                </div>

                                <div class="col-item">
                                    <div class="input_field_row">
                                        <input type="text" name="app_name" value="" placeholder="Telegram/Discord/Email" class="custom_input" required />
                                    </div>
                                </div>

                            </div>

                            <div class="element-content-grid full-grid">
                                <div class="col-item">
                                    <div class="input_field_row">
                                        <textarea name="special" placeholder="Tell us all about your interesting work done in Web3.0 and how can you contribute to our DAO. Do not hesitate to paste Git URLs, LinkedIn Profile, Twitter/FB/Insta profiles OR tell us about your interesting life experiences in general apart from work!" class="custom_txtarea" required=""></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="element-content-grid full-grid">
                                <div class="col-item">
                                    <div class="input_field_row">
                                        <label class="signup_label">
                                            <input type="checkbox" name="signup_newsletter" value="" required />
                                            <div class="signup_txt_label">
                                                Sign up for our newsletter. You can
                                                unsubscribe at any time. See our Privacy Policy for more
                                                detail.</div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="element-content-grid full-grid">
                                <div class="col-item">
                                    <div class="submit-request">
                                        <input type="submit" value="submit now" class="submit-btn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="logo-brand-list">
                        <li>
                            <img src="../images/logo-brand/silicon.png" width="318" height="158" alt="logo" />
                        </li>

                        <li>
                            <img src="../images/logo-brand/top_b2b_companies.png" width="318" height="158" alt="logo" />
                        </li>

                        <li>
                            <img src="../images/logo-brand/NF-logo-23.png" width="318" height="158" alt="logo" />
                        </li>

                        <li>
                            <img src="../images/logo-brand/aws.png" width="318" height="158" alt="logo" />
                        </li>

                        <li>
                            <img src="../images/logo-brand/top-app-development.png" width="318" height="158" alt="logo" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
