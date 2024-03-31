<div class="step-heading">
    <div class="step-heading-text large-text">
        Hi 
        <span class="be-mentor-firstname">
            <?php
                $current_user = wp_get_current_user();
                echo $current_user->user_firstname;
            ?>!
        </span>
    </div>
    <span class="exists-be-mentor-record-text">
        You submitted a request<br>
        on 
        <span id="beMentorDate">
            <?php echo get_user_meta( $current_user->ID, 'be_mentor_lastUpdateDate', true ); ?>
        </span>
        at 
        <span id="beMentorTime">
            <?php echo get_user_meta( $current_user->ID, 'be_mentor_lastUpdateTime', true ); ?>
        </span>
        to <br>
        <strong>Be a Mentor</strong>
    </span>
    <span class="exists-be-mentor-record-bottom-text">
        Our team records all new entries, so we won’t remove your previous request, 
        but we can absolutely add a new one, if you wish. 
        We will contact you directly if we have any questions!
    </span>
</div>   
<div class="field-container be-mentor-request-button-container">
    <div class="action-button">
        <input type="button" id="newBeMentorRequestBtn" value="Send a new request" />
    </div>
</div>