<div class="card-list">
    <div class="card-list__header">
        <div class="card-list__title" contenteditable="true">Hello World</div>
        <svg version="1.1" class="card-list__menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve"><g><g><circle cx="42.667" cy="213.333" r="42.667"/></g></g><g><g><circle cx="213.333" cy="213.333" r="42.667"/></g></g><g><g><circle cx="384" cy="213.333" r="42.667"/></g></g></svg>
    </div>
    <div class="card-list__body">
        <?php
            include('components/card.php')
        ?>
        <textarea class="card-input" rows="3" placeholder="Enter a title for this new card..."></textarea>
    </div>
    <button class="add-card" onclick="displayCardInput();">
        <svg viewBox="0 0 426.66667 426.66667" xmlns="http://www.w3.org/2000/svg"><path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0"/></svg>
        <div>Add another card</div>
    </button>
</div>