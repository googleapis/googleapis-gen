/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package com.google.cloud.dataqna.v1alpha.stub;

import com.google.api.core.BetaApi;
import com.google.api.gax.core.BackgroundResource;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.cloud.dataqna.v1alpha.CreateQuestionRequest;
import com.google.cloud.dataqna.v1alpha.ExecuteQuestionRequest;
import com.google.cloud.dataqna.v1alpha.GetQuestionRequest;
import com.google.cloud.dataqna.v1alpha.GetUserFeedbackRequest;
import com.google.cloud.dataqna.v1alpha.Question;
import com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest;
import com.google.cloud.dataqna.v1alpha.UserFeedback;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Base stub class for the QuestionService service API.
 *
 * <p>This class is for advanced usage and reflects the underlying API directly.
 */
@BetaApi
@Generated("by gapic-generator-java")
public abstract class QuestionServiceStub implements BackgroundResource {

  public UnaryCallable<GetQuestionRequest, Question> getQuestionCallable() {
    throw new UnsupportedOperationException("Not implemented: getQuestionCallable()");
  }

  public UnaryCallable<CreateQuestionRequest, Question> createQuestionCallable() {
    throw new UnsupportedOperationException("Not implemented: createQuestionCallable()");
  }

  public UnaryCallable<ExecuteQuestionRequest, Question> executeQuestionCallable() {
    throw new UnsupportedOperationException("Not implemented: executeQuestionCallable()");
  }

  public UnaryCallable<GetUserFeedbackRequest, UserFeedback> getUserFeedbackCallable() {
    throw new UnsupportedOperationException("Not implemented: getUserFeedbackCallable()");
  }

  public UnaryCallable<UpdateUserFeedbackRequest, UserFeedback> updateUserFeedbackCallable() {
    throw new UnsupportedOperationException("Not implemented: updateUserFeedbackCallable()");
  }

  @Override
  public abstract void close();
}
