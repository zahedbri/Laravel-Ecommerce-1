<div class="aa-input-container" id="aa-input-container">
    <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search..." name="search"
        autocomplete="off" />
    <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
    </svg>
</div>

{{-- <form action="{{ route('search') }}" method="GET" class="form-inline my-2 my-lg-0">
    
    <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="form-control mr-sm-2" placeholder="Search for product" required>
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
</form> --}}

<style type="text/css">
	.aa-input-search {
    width: 400px;
    padding: 12px 28px 12px 12px;
    border: 1px solid lightgrey;
    border-radius: 4px;
    -webkit-transition: .2s;
    transition: .2s;
    font-family: "Arial", sans-serif;
    box-shadow: 4px 4px 0 white;
    font-size: 12px;
    box-sizing: border-box;
    color: black;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;

}

.aa-input-icon {
    height: 16px;
    width: 16px;
    position: absolute;
    top: 50%;
    right: 16px;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    fill: black;
}
</style>

