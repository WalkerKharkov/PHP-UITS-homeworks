var countries = {
    'Ukraine': {
        'Kyiv': {
            'Kyiv': {},
            'Borispol': {}
        },
        'Kharkov': {
            'Kharkov': {},
            'Izyum': {},
            'Zmiyev': {}
        },
        'Nikolaev': {
            'Nikolaev': {},
            'Bashtanka': {},
            'Ochakov': {}
        }
    },
    'USA': {
        'Florida': {
            'Miami': {},
            'San-Fransisco': {}
        },
        'Columbia': {
            'Washington': {},
            'Denver': {}
        },
        'New-York': {
            'New-York': {},
            'Manhattan': {}
        }
    },
    'China': {
        'Beijing': {
            'Beijing': {},
            'Danang': {}
        },
        'Snankhaj': {
            'Shankhaj': {},
            'Sunxunchaj': {}
        }
    }
};

var mainForm = document.getElementById( 'mainForm'),
    country  = document.getElementById( 'country'),
    region   = document.getElementById( 'region'),
    city     = document.getElementById( 'city');

var setOptions = function( elemArray ) {
    var options = '';
    for ( var item in elemArray ) {
        options += '<option value="' + item + '">' + item + '</option>';
    }
    return options;
};

var currentPos = function( elem ) {
    return elem.options[ elem.selectedIndex ].value;
};

var optionsClear = function() {
    var args = [].slice.call( arguments );
    args.forEach( function( elem ) {
        while ( elem.firstElementChild ) {
            elem.removeChild( elem.firstElementChild );
        }
    });
};

var optionsRender = function( elem ) {
    var elemArray = {};
    switch ( elem.id ) {
        case 'country':
            elemArray = countries;
            break;
        case 'region':
            elemArray = countries[ currentPos( country ) ];
            break;
        case 'city':
            elemArray = countries[ currentPos( country ) ][ currentPos( region ) ];
            break;
        default:
    }
    elem.innerHTML = setOptions( elemArray );
};

var selectController = {
    country: function() {
        optionsClear( city, region );
        city.style.display = 'none';
        region.style.display = 'block';
        optionsRender( region );
    },
    region: function() {
        optionsClear( city );
        city.style.display = 'block';
        optionsRender( city );
    }
};

var changeListener = function( event ) {
    var target = event.target;
    if ( target.tagName != 'SELECT' ) return;
    if ( selectController[ target.id ] ) selectController[ target.id ]();
};

country.innerHTML = setOptions( countries );
mainForm.addEventListener( 'change', changeListener );