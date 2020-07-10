<figure>
    <div>
        <img src="{{asset($paintingDetails['painting_path'])}}" alt="{{ $paintingDetails['title'] }}" />
    </div>
    <figcaption>
        <h2><span>{{ $paintingDetails['title'] }}</span></h2>
        <div>

            <dl>
                <dt>Genre</dt>
                <dd>{{ $paintingDetails['genre'] }}</dd>
                <dt>Technique</dt>
                <dd>{{ $paintingDetails['technique'] }}</dd>
                <dt>Material</dt>
                <dd>{{ $paintingDetails['material'] }}</dd>
                <dt>Dimensions</dt>
                <dd>{{ $paintingDetails['dimensions'] }}</dd>
                <dt>Gallery</dt>
                <dd>{{ $paintingDetails['gallery'] }}</dd>
                <dt>click to see image:</dt>
                <dd>
                    <a href="{{asset($paintingDetails['painting_path'])}}" data-lightbox="example-1"
                        data-title="{{ $paintingDetails['title'] }}">
                        <button class="btn">
                            show me
                        </button>
                    </a>
                </dd>

            </dl>
        </div>
    </figcaption>
</figure>