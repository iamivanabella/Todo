// Function to enable task creation on clicking 'Add Task'
$('.add-task-btn').on('click', function() {
    // Create a text input element dynamically
    const newTaskInput = $('<input>', {
        type: 'text',
        class: 'new-task-input',
        placeholder: 'Enter task description...',
    });

    // Replace the 'Add Task' button with the input field
    $(this).replaceWith(newTaskInput);

    // When the input field loses focus (task description entered), trigger saveTask function
    newTaskInput.on('blur', function() {
        const taskDescription = $(this).val().trim();
        if (taskDescription !== '') {
            saveTask(taskDescription); // Function to save task to the database
        } else {
            // Handle empty task description
            $(this).replaceWith('<span class="add-task-btn">Add Task</span>');
        }
    });
});