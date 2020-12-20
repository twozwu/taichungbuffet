<style type="text/css">
    #search-wrapper {
        display: inline-block;
        position: relative;
    }

    #search-wrapper.search-expanded #close-icon:before {
        animation: cross-1-in 0.25s linear 0s forwards;
    }

    #search-wrapper.search-expanded #close-icon:after {
        animation: cross-2-in 0.25s linear 0.2s forwards;
    }

    #search-wrapper.search-expanded:after {
        animation: lens-out 0.5s linear 1 forwards;
    }

    #search-wrapper:after {
        position: absolute;
        bottom: 2px;
        right: -8px;
        display: block;
        content: "";
        width: 20px;
        height: 4px;
        background-color: #fff;
        transform: rotate(45deg) scaleX(0);
        transform-origin: 0 50%;
        animation: lens-in 0.6s linear 0.9s forwards;
    }

    #search {
        color: #fff!important;
        background: none!important;
        border: 4px solid #fff!important;
        outline: none;
        padding: 10px 20px;
        border-radius: 1000px;
        width: 0;
        transition: width 0.3s 0.6s;
    }

    #search::-webkit-input-placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    #search:focus {
        width: 200px;
    }

    #close-icon {
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 65%;
        width: 20px;
        height: 20px;
        transform: translateY(-2px);
        transition: 0.2s all;
        display: none;
    }

    #close-icon[style*="display: block"] {
        color: red;
    }

    #close-icon[style*="display: block"]:before {
        transform: rotate(45deg) scaleX(1) translateY(10px);
    }

    #close-icon[style*="display: block"]:after {
        transform: rotate(-45deg) scaleX(1) translateY(-10px);
    }

    #close-icon:before,
    #close-icon:after {
        display: block;
        content: "";
        position: absolute;
        width: 20px;
        height: 4px;
        background-color: #fff;
        transform-origin: 100% 50%;
    }

    #close-icon:before {
        transform: rotate(45deg) scaleX(0) translateY(10px);
    }

    #close-icon:after {
        transform: rotate(-45deg) scaleX(0) translateY(-10px);
    }

    #close-icon.closing:before {
        animation: cross-1-out 0.25s linear 0s forwards;
    }

    #close-icon.closing:after {
        animation: cross-2-out 0.25s linear 0.2s forwards;
    }

    @keyframes lens-out {
        0% {
            transform: rotate(45deg) scaleX(1);
        }

        30% {
            transform: rotate(45deg) scaleX(1.4);
        }

        100% {
            transform: rotate(45deg) scaleX(0);
        }
    }

    @keyframes lens-in {
        0% {
            transform: rotate(45deg) scaleX(0);
        }

        30% {
            transform: rotate(45deg) scaleX(1.4);
        }

        100% {
            transform: rotate(45deg) scaleX(1);
        }
    }

    @keyframes cross-1-in {
        0% {
            transform: rotate(45deg) scaleX(0) translateY(10px);
        }

        70% {
            transform: rotate(45deg) scaleX(1.2) translateY(10px);
        }

        100% {
            transform: rotate(45deg) scaleX(1) translateY(10px);
        }
    }

    @keyframes cross-2-in {
        0% {
            transform: rotate(-45deg) scaleX(0) translateY(-10px);
        }

        70% {
            transform: rotate(-45deg) scaleX(1.2) translateY(-10px);
        }

        100% {
            transform: rotate(-45deg) scaleX(1) translateY(-10px);
        }
    }

    @keyframes cross-1-out {
        0% {
            transform: rotate(45deg) scaleX(1) translateY(10px);
        }

        100% {
            transform: rotate(45deg) scaleX(0) translateY(10px);
        }
    }

    @keyframes cross-2-out {
        0% {
            transform: rotate(-45deg) scaleX(1) translateY(-10px);
        }

        100% {
            transform: rotate(-45deg) scaleX(0) translateY(-10px);
        }
    }
</style>
<section id="cta" style="background-color: brown; position: relative; z-index:2;">
    <h2>Search For Your Favorite</h2>
    <form id="form2" name="form2" action="Search_merchandise.php" method="GET">
        <div class="row uniform 50%" style="margin-left: 20px;">
            <div id="search-wrapper">
                <input type="text" name="key" id="search" placeholder="KeyWord" required />
                <div id="close-icon"></div>
            </div>
            <div class="4u 12u(mobilep) text-center">
                <input type="submit" value="Search" class="fit" />
            </div>
        </div>
    </form>
</section>

<script>
    "use strict";

    var search = document.getElementById("search"),
        searchWrapper = document.getElementById("search-wrapper"),
        closeIcon = document.getElementById("close-icon");

    // Input focus
    search.onfocus = function() {
        searchWrapper.classList.add("search-expanded");
        this.addEventListener("transitionend", function() {
            closeIcon.style.display = "block";
        });
    };

    // Input blur
    search.onblur = function() {
        searchWrapper.classList.remove("search-expanded");
        closeIcon.classList.add("closing");

        this.addEventListener("transitionend", function() {
            closeIcon.classList.remove("closing");
            closeIcon.style.display = "none";
        });
    };

    // Close
    closeIcon.onclick = function() {
        this.classList.add("closing");

        document.activeElement.blur();

        setTimeout(function() {
            closeIcon.classList.remove("closing");
        }, 1000);
    };
</script>