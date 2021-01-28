/*
 * Copyright 2020 Google LLC
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

package com.google.cloud.devtools.remoteworkers.v1test2.stub;

import com.google.api.gax.core.BackgroundResource;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.devtools.remoteworkers.v1test2.BotSession;
import com.google.devtools.remoteworkers.v1test2.CreateBotSessionRequest;
import com.google.devtools.remoteworkers.v1test2.UpdateBotSessionRequest;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Base stub class for the Bots service API.
 *
 * <p>This class is for advanced usage and reflects the underlying API directly.
 */
@Generated("by gapic-generator-java")
public abstract class BotsStub implements BackgroundResource {

  public UnaryCallable<CreateBotSessionRequest, BotSession> createBotSessionCallable() {
    throw new UnsupportedOperationException("Not implemented: createBotSessionCallable()");
  }

  public UnaryCallable<UpdateBotSessionRequest, BotSession> updateBotSessionCallable() {
    throw new UnsupportedOperationException("Not implemented: updateBotSessionCallable()");
  }

  @Override
  public abstract void close();
}
