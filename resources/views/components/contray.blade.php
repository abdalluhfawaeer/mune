<div>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                <select id="country" class="form-control form-control-lg" wire:model="country">
                    <option>select country</option>
                </select>
        </div>
            <div class="col-lg-6 fv-row fv-plugins-icon-container">
                {{-- <span id="state-code"> --}}
                    {{-- <input type="text" id="state" class="form-control form-control-lg"> --}}
                    <select id="state-code" class="form-control form-control-lg" wire:model="state">
                        <option>select country</option>
                    </select>
                {{-- </span> --}}
            </div>
        </div>
    </div>
    <script src="{{ asset('js/country-states.js') }}"></script>
    <script>
    let user_country_code = '{{ $country }}';
    (function () {
        let country_list = country_and_states['country'];
        let states_list = country_and_states['states'];

        let option =  '';
        option += '<option>select country</option>';
        for(let country_code in country_list){
            let selected = (country_code == user_country_code) ? ' selected' : '';
            option += '<option value="'+country_code+'"'+selected+'>'+country_list[country_code]+'</option>';
        }
        document.getElementById('country').innerHTML = option;

        let text_box = '<input type="text" class="form-control form-control-lg" id="state" wire:model="state">';
        let state_code_id = document.getElementById("state-code");

        function create_states_dropdown() {
            let country_code = document.getElementById("country").value;
            let states = states_list[country_code];
            console.log(states_list);
            if(!states){
                state_code_id.innerHTML = text_box;
                return;
            }
            let option = '';
            if (states.length > 0) {
                // option = '\n';
                for (let i = 0; i < states.length; i++) {
                    option += '<option value="'+states[i].name.replace("Governorate", "")+'">'+states[i].name.replace("Governorate", "")+'</option>';
                }
                // option += '</select>';
            } else {
                option = text_box
            }
            state_code_id.innerHTML = option;
        }

        const country_select = document.getElementById("country");
        country_select.addEventListener('change', create_states_dropdown);

        create_states_dropdown();
    })();

    </script>
</div>