<div class="location">
    <div class="mt-5">
        <span class="post-no-bill header ms-4">Location</span>
    </div>
    <div id="map"></div>
    <script>
        (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
            key: "{{ env('GOOGLE_MAPS_API_KEY') }}",
            v: "weekly",
        });
    </script>
    <script>
        let map;

        async function initMap() {
            const position = { lat: 3.1408384354696133, lng: 101.72136140251885 };
            const { Map } = await google.maps.importLibrary("maps");
            const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

            map = new Map(document.getElementById("map"), {
                zoom: 10,
                center: position,
                mapId: "DEMO_MAP_ID",
            });

            const marker = new AdvancedMarkerElement({
                map: map,
                position: position,
                title: "Spark",
            });
        }

        initMap();
    </script>
</div>
