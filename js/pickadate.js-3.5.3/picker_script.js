$(document).ready(function() {

    var from_$input = $('#input_main_from').pickadate(),
        from_picker = from_$input.pickadate('picker')

    var to_$input = $('#input_main_to').pickadate(),
        to_picker = to_$input.pickadate('picker')


// Check if there’s a “from” or “to” date to start with.
    if ( from_picker.get('value') ) {
        to_picker.set('min', from_picker.get('select'))
    }
    if ( to_picker.get('value') ) {
        from_picker.set('max', to_picker.get('select'))
    }

// When something is selected, update the “from” and “to” limits.
    from_picker.on('set', function(event) {
        if ( event.select ) {
            to_picker.set('min', from_picker.get('select'))
        }
        else if ( 'clear' in event ) {
            to_picker.set('min', false)
        }
    })
    to_picker.on('set', function(event) {
        if ( event.select ) {
            from_picker.set('max', to_picker.get('select'))
        }
        else if ( 'clear' in event ) {
            from_picker.set('max', false)
        }
    })

    var from_qa_$input = $('#input_qa_from').pickadate(),
        from_qa_picker = from_qa_$input.pickadate('picker')

    var to_qa_$input = $('#input_qa_to').pickadate(),
        to_qa_picker = to_qa_$input.pickadate('picker')


// Check if there’s a “from” or “to” date to start with.
    if ( from_qa_picker.get('value') ) {
        to_qa_picker.set('min', from_qa_picker.get('select'))
    }
    if ( to_qa_picker.get('value') ) {
        from_qa_picker.set('max', to_qa_picker.get('select'))
    }

// When something is selected, update the “from” and “to” limits.
    from_qa_picker.on('set', function(event) {
        if ( event.select ) {
            to_qa_picker.set('min', from_qa_picker.get('select'))
        }
        else if ( 'clear' in event ) {
            to_qa_picker.set('min', false)
        }
    })
    to_qa_picker.on('set', function(event) {
        if ( event.select ) {
            from_qa_picker.set('max', to_qa_picker.get('select'))
        }
        else if ( 'clear' in event ) {
            from_qa_picker.set('max', false)
        }
    })


    var from_feedback_$input = $('#input_feedback_from').pickadate(),
        from_feedback_picker = from_feedback_$input.pickadate('picker')

    var to_feedback_$input = $('#input_feedback_to').pickadate(),
        to_feedback_picker = to_feedback_$input.pickadate('picker')


// Check if there’s a “from” or “to” date to start with.
    if ( from_feedback_picker.get('value') ) {
        to_feedback_picker.set('min', from_feedback_picker.get('select'))
    }
    if ( to_feedback_picker.get('value') ) {
        from_feedback_picker.set('max', to_feedback_picker.get('select'))
    }

// When something is selected, update the “from” and “to” limits.
    from_feedback_picker.on('set', function(event) {
        if ( event.select ) {
            to_feedback_picker.set('min', from_feedback_picker.get('select'))
        }
        else if ( 'clear' in event ) {
            to_feedback_picker.set('min', false)
        }
    })
    to_feedback_picker.on('set', function(event) {
        if ( event.select ) {
            from_feedback_picker.set('max', to_feedback_picker.get('select'))
        }
        else if ( 'clear' in event ) {
            from_feedback_picker.set('max', false)
        }
    })

    var from_launch_$input = $('#input_launch_from').pickadate(),
        from_launch_picker = from_launch_$input.pickadate('picker')

    var to_launch_$input = $('#input_launch_to').pickadate(),
        to_launch_picker = to_launch_$input.pickadate('picker')


// Check if there’s a “from” or “to” date to start with.
    if ( from_launch_picker.get('value') ) {
        to_launch_picker.set('min', from_launch_picker.get('select'))
    }
    if ( to_launch_picker.get('value') ) {
        from_launch_picker.set('max', to_launch_picker.get('select'))
    }

// When something is selected, update the “from” and “to” limits.
    from_launch_picker.on('set', function(event) {
        if ( event.select ) {
            to_launch_picker.set('min', from_launch_picker.get('select'))
        }
        else if ( 'clear' in event ) {
            to_launch_picker.set('min', false)
        }
    })
    to_launch_picker.on('set', function(event) {
        if ( event.select ) {
            from_launch_picker.set('max', to_launch_picker.get('select'))
        }
        else if ( 'clear' in event ) {
            from_launch_picker.set('max', false)
        }
    })
});