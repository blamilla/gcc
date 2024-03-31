<div class="step-heading">
    <div class="step-heading-text large-text">
        Hi 
        <span class="find-mentor-firstname">
            <?php
                $current_user = wp_get_current_user();
                echo $current_user->user_firstname;
            ?>!
        </span>
    </div>
    <span class="exists-find-mentor-record-text">
        You submitted a request<br>
        on 
        <span id="findMentorDate375">
            <?php echo get_user_meta( $current_user->ID, 'find_mentor_lastUpdateDate', true ); ?>
        </span>
        at 
        <span id="findMentorTime375">
            <?php echo get_user_meta( $current_user->ID, 'find_mentor_lastUpdateTime', true ); ?>
        </span>
        to <br>
        <strong>Find a Mentor</strong>
    </span>
    <span class="exists-find-mentor-record-bottom-text">
        Our team records all new entries, so we won’t remove your previous request, 
        but we can absolutely add a new one, if you wish. 
        We will contact you directly if we have any questions!
    </span>
</div>   
<div class="field-container find-mentor-request-button-container">
    <div class="action-button">
        <input type="button" id="newFindMentor375RequestBtn" value="Send a new request" />
    </div>
</div>