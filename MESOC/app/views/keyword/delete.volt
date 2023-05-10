
{{ content() }}

{{ form("keyword/deleteConfirm") }}

     
   <H2> KEYWORD DELETE </H2>
    <fieldset>

    {% for element in form %}
        {% if is_a(element, 'Phalcon\Forms\Element\Hidden') %}
            {{ element }}
        {% else %}
			
            <div class="form-group">
                {{ element.label() }}
                {{ element.render(['class': 'form-control']) }}
            </div>
        {% endif %}
    {% endfor %}

    </fieldset>
 
    Do You want delete keyword?
   
 <div class="clearfix center">
    {{ submit_button("Delete", "class": "btn btn-primary") }}   <a href="/keyword/view" class="btn btn-primary">Cancel</a> </div>
    </div>
</form>
