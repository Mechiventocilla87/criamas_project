
<div class="puppies-container">
    <div class="price-range">
        <div class="price-p">
            <p>Rango de precio</p>
            <p>|</p>
            <input type="number" id="lower-input" value="20000"/>
            <input type="number" id="upper-input" value="100000"/>
            <button class="button-filter">Filtrar</button>
        </div>
        <div class="range-p">
            <span class="multi-range">
            <input
            oninput="lower(this.value);"
            type="range" 
            min="0" max="200000"
            value="50000"
            />
            <input 
            oninput="upper(this.value);"
            type="range" 
            min="0" max="200000"
            value="100000"
            />       
            </span>
        </div>
    </div>
    <div class="breed-search">
        <input class="input-p" value="Busca la raza que te interese..."/>
        <button class="button-search">Buscar</button>
    </div>
</div>

